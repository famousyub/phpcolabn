<?php
#Application name: PhpCollab
#Status page: 0
#Path by root: ../topics/addpost.php

use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';

try {
    $topics = $container->getTopicsLoader();
    $projects = $container->getProjectsLoader();
    $sendNotifications = $container->getNotificationsManager();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$topic_id = $request->query->get('id');
$strings = $GLOBALS["strings"];

$detailTopic = $topics->getTopicByTopicId($topic_id);

$projectDetail = $projects->getProjectById($detailTopic["top_project"]);

if ($request->isMethod('post')) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->request->get("action") == "add") {
                $post_message = phpCollab\Util::convertData($request->request->get('post_message'));
                $post_message = phpCollab\Util::autoLinks($post_message);

                // Increment the local copy of detailTopic instead of making another DB call to update and retrieve the count
                $detailTopic["top_posts"] = $detailTopic["top_posts"] + 1;

                // Add new post
                $newPost = $topics->addPost($topic_id, $session->get("id"), $post_message);

                // Increment the
                $topics->incrementTopicPostsCount($topic_id);

                if ($notifications == "true") {
                    $listPosts = $topics->getPostsByTopicIdAndNotOwner($detailTopic["top_id"], $session->get("id"));

                    $distinct = '';

                    foreach ($listPosts as $post) {
                        if ($post["pos_mem_id"] != $distinct) {
                            $posters .= $post["pos_mem_id"] . ",";
                        }
                        $distinct = $post["pos_mem_id"];
                    }
                    if (substr($posters, -1) == ",") {
                        $posters = substr($posters, 0, -1);
                    }

                    if ($posters != "") {
                        $newPostNotice = $container->getNotificationNewPostManager();

                        try {
                            $notificationList = $sendNotifications->getNotificationsWhereMemberIn($posters);

                            $newPostNotice->generateEmail($detailTopic, $projectDetail, $notificationList, $session, $logger);

                        } catch (Exception$e) {
                            $logger->error($e->getMessage());
                            $error = $strings["action_not_allowed"];
                        }
                    }
                }
                phpCollab\Util::headerFunction("../topics/viewtopic.php?id=$topic_id&msg=add");
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Topics: Add post',
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}

$idStatus = $detailTopic["top_status"];
$idPublish = $detailTopic["top_published"];

$listPosts = $topics->getPostsByTopicId($detailTopic["top_id"]);

if ($projectDetail["pro_org_id"] == "1") {
    $projectDetail["pro_org_name"] = $strings["none"];
}

$setTitle .= " : " . $strings["post_to_discussion"];

$bodyCommand = "onLoad=\"document.ptTForm.tpm.focus();\"";
include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
    $projectDetail["pro_name"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../topics/listtopics.php?project=" . $projectDetail["pro_id"],
    $strings["discussions"], "in"));
$blockPage->itemBreadcrumbs($detailTopic["top_subject"]);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($GLOBALS["msgLabel"]);
}

$block1 = new phpCollab\Block();

$block1->form = "ptT";
$block1->openForm("../topics/addpost.php?id=" . $detailTopic["top_id"] . "&project=" . $detailTopic["top_project"],
    null, $csrfHandler);

if (isset($error) && $error != "") {
    $block1->headingError($strings["errors"]);
    $block1->contentError($error);
}

$block1->heading($strings["post_to_discussion"] . " : " . $detailTopic["top_subject"]);

$block1->openContent();
$block1->contentTitle($strings["info"]);

$block1->contentRow($strings["project"],
    $blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
        $projectDetail["pro_name"] . " (#" . $projectDetail["pro_id"] . ")", "in"));
$block1->contentRow($strings["organization"], $projectDetail["pro_org_name"]);
$block1->contentRow($strings["owner"],
    $blockPage->buildLink("../users/viewuser.php?id=" . $projectDetail["pro_mem_id"], $projectDetail["pro_mem_name"],
        "in") . " (" . $blockPage->buildLink($projectDetail["pro_mem_email_work"], $projectDetail["pro_mem_login"],
        "mail") . ")");

if ($sitePublish == "true") {
    $block1->contentRow($strings["published"], $GLOBALS["statusPublish"][$idPublish]);
}

$block1->contentRow($strings["retired"], $GLOBALS["statusTopicBis"][$idStatus]);
$block1->contentRow($strings["posts"], $detailTopic["top_posts"]);
$block1->contentRow($strings["last_post"],
    phpCollab\Util::createDate($detailTopic["top_last_post"], $session->get("timezone")));

$block1->contentTitle($strings["details"]);

$block1->contentRow($strings["message"],
    '<textarea rows="10" style="width: 400px; height: 160px;" name="post_message" cols="47"></textarea>');
$block1->contentRow("", '<button type="submit" name="action" value="add">' . $strings["save"] . '</button>');

$block1->contentTitle($strings["posts"]);

//for ($i = 0; $i < $comptListPosts; $i++) {
foreach ($listPosts as $post) {
    $block1->contentRow($strings["posted_by"],
        $blockPage->buildLink($post["pos_mem_email_work"], $post["pos_mem_name"], "mail"));

    if ($post["pos_created"] > $session->get("lastVisited")) {
        $block1->contentRow($strings["when"],
            "<b>" . phpCollab\Util::createDate($post["pos_created"], $session->get("timezone")) . "</b>");
    } else {
        $block1->contentRow($strings["when"],
            phpCollab\Util::createDate($post["pos_created"], $session->get("timezone")));
    }
    $block1->contentRow("", nl2br($post["pos_message"]));
    $block1->contentRow("", "", "true");
}

$block1->closeContent();
$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
