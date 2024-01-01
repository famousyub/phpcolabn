<?php

$checkSession = "true";
require_once '../includes/library.php';

try {
    $projects = $container->getProjectsLoader();
    $teams = $container->getTeams();
    $sendNotifications = $container->getNotificationsManager();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$project = $request->query->get('project');
$strings = $GLOBALS["strings"];

$projectDetail = $projects->getProjectById($project);

if (!$projectDetail) {
    phpCollab\Util::headerFunction("../projects/listprojects.php?msg=blank");
}

if ($request->query->get('action') == "add") {
    if (isset($id) && $id != "") {
        $pieces = explode("**", $id);
        $id = str_replace("**", ",", $id);

        if ($htaccessAuth == "true") {
            $Htpasswd = $container->getHtpasswdService();
            try {
                $Htpasswd->initialize("../files/" . $projectDetail["pro_id"] . "/.htpasswd");
            } catch (Exception $e) {
                $logger->critical('Htpasswd: ' . $e->getMessage());
            }

            $listMembers = $members->getMembersByIdIn($id);

            foreach ($listMembers as $member) {
                try {
                    $Htpasswd->addUser($member["mem_login"], $member["mem_password"]);
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
        $comptTeam = count($pieces);
        for ($i = 0; $i < $comptTeam; $i++) {
            $teams->addTeam($projectDetail["pro_id"], $pieces[$i], 1, 0);

            //if mantis bug tracker enabled
            if ($enableMantis == "true") {
                // Assign user to this project in mantis
                $f_access_level = $client_user_level; // Reporter access
                $f_project_id = $projectDetail["pro_id"];
                $f_user_id = $pieces[$i];
                include '../mantis/user_proj_add.php';
            }
        }

        if ($notifications == "true") {
            $addProjectTeam = $container->getNotificationAddProjectTeamService();

            try {
                $notificationList = $sendNotifications->getNotificationsWhereMemberIn($id);
                $addProjectTeam->generateEmail($projectDetail, $notificationList, $session, $logger);
            } catch (Exception$e) {
                $logger->error($e->getMessage());
                $error = $strings["action_not_allowed"];
            }
        }
        phpCollab\Util::headerFunction("../projects/viewprojectsite.php?id=" . $projectDetail["pro_id"] . "&msg=addClientToSite");
    }
}

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
    $projectDetail["pro_name"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewprojectsite.php?id=" . $projectDetail["pro_id"],
    $strings["project_site"], "in"));
$blockPage->itemBreadcrumbs($strings["grant_client"]);
$blockPage->closeBreadcrumbs();

$block1 = new phpCollab\Block();

$block1->form = "atpt";
$block1->openForm("../teams/addclientuser.php?project=$project#" . $block1->form . "Anchor", null, $csrfHandler);

$block1->heading($strings["add_team"]);

$block1->openPaletteIcon();
$block1->paletteIcon(0, "add", $strings["add"]);
$block1->paletteIcon(1, "info", $strings["view"]);
$block1->paletteIcon(2, "edit", $strings["edit"]);
$block1->closePaletteIcon();

$block1->sorting("team", $sortingUser["users"], "mem.name ASC", $sortingFields = [
    0 => "mem.name",
    1 => "mem.title",
    2 => "mem.login",
    3 => "mem.phone_work",
    4 => "log.connected"
]);

$concatMembers = $teams->getClientTeamMembersByProject($project);

$membersTeam = null;
if ($concatMembers) {
    foreach ($concatMembers as $member) {
        $membersTeam .= $member["tea_mem_id"] . ",";
        $membersTeam = rtrim(rtrim($membersTeam), ',');
    }
}

$listMembers = $members->getClientMembersByOrgIdAndNotInTeam($projectDetail["pro_organization"], $membersTeam,
    $block1->sortingValue);

if ($listMembers) {
    $block1->openResults();

    $block1->labels($labels = [
        0 => $strings["full_name"],
        1 => $strings["title"],
        2 => $strings["user_name"],
        3 => $strings["work_phone"],
        4 => $strings["connected"]
    ], "false");

    foreach ($listMembers as $member) {
        if ($member["mem_phone_work"] == "") {
            $member["mem_phone_work"] = $strings["none"];
        }
        $block1->openRow();
        $block1->checkboxRow($member["mem_id"]);
        $block1->cellRow($blockPage->buildLink("../users/viewuser.php?id=" . $member["mem_id"], $member["mem_name"],
            "in"));
        $block1->cellRow($member["mem_title"]);
        $block1->cellRow($blockPage->buildLink($member["mem_email_work"], $member["mem_login"], "mail"));
        $block1->cellRow($member["mem_phone_work"]);
        if ($member["mem_profil"] == "3") {
            $z = "(Client on project site)";
        } else {
            $z = "";
        }
        if ($member["mem_log_connected"] > $dateunix - 5 * 60) {
            $block1->cellRow($strings["yes"] . " " . $z);
        } else {
            $block1->cellRow($strings["no"]);
        }
        $block1->closeRow();
    }

    $block1->closeResults();
} else {
    $block1->noresults();
}
$block1->closeFormResults();

$block1->openPaletteScript();
$block1->paletteScript(0, "add", "../teams/addclientuser.php?project=$project&action=add", "false,true,true",
    $strings["add"]);
$block1->paletteScript(1, "info", "../users/viewuser.php?", "false,true,false", $strings["view"]);
$block1->paletteScript(2, "edit", "../users/updateclientuser.php?orgid=" . $projectDetail["pro_organization"] . "",
    "false,true,false", $strings["edit"]);
$block1->closePaletteScript(count($listMembers), array_column($listMembers, 'mem_id'));

include APP_ROOT . '/views/layout/footer.php';
