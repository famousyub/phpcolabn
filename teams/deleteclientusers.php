<?php
#Application name: PhpCollab
#Status page: 1
#Path by root: ../teams/deleteclientusers.php

$checkSession = "true";
require_once '../includes/library.php';

try {
    $projects = $container->getProjectsLoader();
    $sendNotifications = $container->getNotificationsManager();
    $teams = $container->getTeams();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$projectDetail = $projects->getProjectById($project);

if (!$projectDetail) {
    phpCollab\Util::headerFunction("../projects/listprojects.php?msg=blank");
}

if ($action == "delete") {
    $id = str_replace("**", ",", $id);
    $pieces = explode(",", $id);


    if ($htaccessAuth == "true") {
        $Htpasswd = $container->getHtpasswdService();
        try {
            $Htpasswd->initialize("../files/" . $projectDetail["pro_id"] . "/.htpasswd");
        } catch (Exception $e) {
            $logger->critical('Htpasswd: ' . $e->getMessage());
        }

        $listMembers = $members->getMembersByIdIn($id);

        foreach ($listMembers as $listMember) {
            try {
                $Htpasswd->deleteUser($listMember["mem_login"]);
            } catch (Exception $e) {
                $logger->error($e->getMessage());
                $error = $strings["action_not_allowed"];
            }
        }
    }

    //if mantis bug tracker enabled
    if ($enableMantis == "true") {
        //  include mantis library
        include '../mantis/core_API.php';
    }
    $compt = count($pieces);

    for ($i = 0; $i < $compt; $i++) {
        $teams->deleteTeamWhereMemberIn($pieces[$i]);
        //if mantis bug tracker enabled
        if ($enableMantis == "true") {
            // Unassign user from this project in mantis
            $f_project_id = $project;
            $f_user_id = $pieces[$i];
            include '../mantis/user_proj_delete.php';
        }
    }
    if ($notifications == "true") {
        $removeProjectTeam = $container->getNotificationRemoveProjectTeamService();

        try {
            $notificationList = $sendNotifications->getNotificationsWhereMemberIn($id);

            $removeProjectTeam->generateEmail($projectDetail, $notificationList, $session, $logger);

        } catch (Exception$e) {
            $logger->error($e->getMessage());
            $error = $strings["action_not_allowed"];
        }
    }
    phpCollab\Util::headerFunction("../projects/viewprojectsite.php?id=$project&msg=removeClientToSite");
}

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
    $projectDetail["pro_name"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewprojectsite.php?id=" . $projectDetail["pro_id"],
    $strings["project_site"], "in"));
$blockPage->itemBreadcrumbs($strings["remove_team_client"]);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();

$block1->form = "crM";
$block1->openForm("../teams/deleteclientusers.php?project=$project&action=delete&id=" . $id, null, $csrfHandler);

$block1->heading($strings["remove_team_client"]);

$block1->openContent();
$block1->contentTitle($strings["remove_team_info"]);

$id = str_replace("**", ",", $id);
$listMembers = $members->getMembersByIdIn($id, "mem.name");

foreach ($listMembers as $listMember) {
    $block1->contentRow("#{$listMember["mem_id"]}", " - {$listMember["mem_login"]} ({$listMember["mem_name"]})");
}

$block1->contentRow("",
    '<input type="submit" value="' . $strings["delete"] . '">&#160;<input type="button" value="' . $strings["cancel"] . '" onClick="history.back();">');

$block1->closeContent();
$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
