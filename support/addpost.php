<?php
#Application name: PhpCollab
#Status page: 0

/**
 * Note, a "post" is actually a "response" to a support request.
 */

use phpCollab\Util;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';

$id = $request->query->get('id');
$action = $request->query->get('action');

if ($enableHelpSupport != "true") {
    phpCollab\Util::headerFunction('../general/permissiondenied.php');
}

if ($supportType == "admin") {
    if ($session->get("profile") != "0") {
        phpCollab\Util::headerFunction('../general/permissiondenied.php');
    }
}

try {
    $support = $container->getSupportLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$requestDetail = $support->getSupportRequestById($id);

if ($request->isMethod('post')) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->request->get('action') == "edit") {

                try {
                    $support->updateSupportPostStatus(
                        $id,
                        $request->request->get('status'),
                        ($request->request->get('status') == 2) ? $dateheure : null
                    );

                    if ($notifications == "true") {
                        if ($requestDetail["sr_status"] != $request->request->get('status')) {
                            $num = $id;
                            $support->sendRequestChangedNotification($requestDetail);
                        }
                    }

                    phpCollab\Util::headerFunction("../support/viewrequest.php?id=$id");
                } catch (Exception $e) {
                    $logger->error('Support (edit post)', ['Exception message', $e->getMessage()]);
                    $error = $strings["action_not_allowed"];
                }
            }

            if ($request->request->get('action') == "add") {
                try {
                    $newPost = $support->addResponse(
                        $id,
                        Util::convertData($request->request->get('message')),
                        $dateheure, $session->get("id"), $requestDetail["sr_project"]);

                    if (!empty($newPost) && $notifications == "true") {
                        $support->sendPostChangedNotification($newPost);
                    }
                } catch (Exception $e) {
                    $logger->error('Support (add post)', ['Exception message', $e->getMessage()]);
                    $error = $strings["action_not_allowed"];
                }

                phpCollab\Util::headerFunction("../support/viewrequest.php?id=$id");
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Support: Add post',
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}

$bodyCommand = 'onLoad="document.getElementById(\'message\').focus();"';
include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();

if ($supportType == "team") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $requestDetail["sr_project"],
        $requestDetail["sr_pro_name"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../support/listrequests.php?id=" . $requestDetail["sr_project"],
        $strings["support_requests"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../support/viewrequest.php?id=" . $requestDetail["sr_id"],
        $escaper->escapeHtml($requestDetail["sr_subject"]), "in"));
    if ($action == "status") {
        $blockPage->itemBreadcrumbs($strings["edit_status"]);
    } else {
        $blockPage->itemBreadcrumbs($strings["add_support_response"]);
    }
} elseif ($supportType == "admin") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../administration/admin.php?", $strings["administration"],
        "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../administration/support.php?", $strings["support_management"],
        "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../support/listrequests.php?id=" . $requestDetail["sr_project"],
        $strings["support_requests"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../support/viewrequest.php?id=" . $requestDetail["sr_id"],
        $escaper->escapeHtml($requestDetail["sr_subject"]), "in"));
    if ($action == "status") {
        $blockPage->itemBreadcrumbs($strings["edit_status"]);
    } else {
        $blockPage->itemBreadcrumbs($strings["add_support_response"]);
    }
}
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}


$block2 = new phpCollab\Block();

$block2->form = "sr";
$block2->openForm("../support/addpost.php?id=$id&#" . $block2->form . "Anchor", null, $csrfHandler);
if ($action == "status") {
    echo <<<FORM
    <input type="hidden" name="action" value="edit">
FORM;
} else {
    echo <<<FORM
    <input type="hidden" name="action" value="add">
FORM;
}


if (!empty($error)) {
    $block2->headingError($strings["errors"]);
    $block2->contentError($error);
}

if ($action == "status") {
    $block2->heading($strings["edit_status"]);
} else {
    $block2->heading($strings["add_support_response"]);
}

$block2->openContent();
$block2->contentTitle($strings["details"]);
if ($action == "status") {
    echo <<<TR
    <tr class="odd">
        <td class="leftvalue">{$strings["status"]} :</td>
        <td><select name="status">
TR;

    foreach ($requestStatus as $index => $status) {
        if ($requestDetail["sr_status"] == $index) {
            echo '<option value="' . $index . '" selected>' . $status . '</option>';
        } else {
            echo '<option value="' . $index . '">' . $status . '</option>';
        }
    }
    echo <<<HTML
            </select></td>
        </tr>
HTML;

} else {
    echo <<<HTML
        <tr class="odd">
            <td class="leftvalue">{$strings["message"]}</td>
            <td><textarea rows="3" style="width: 400px; height: 200px;" id="message" name="message" cols="43">{$escaper->escapeHtml($request->request->get('message'))}</textarea></td>
        </tr>
HTML;
}
echo <<<TR
        <tr class="odd">
            <td class="leftvalue">&nbsp;</td>
            <td><input type="submit" value="{$strings["submit"]}"></td>
        </tr>
TR;

$block2->closeContent();

echo <<<FORM
    <input type="hidden" name="user" value="{$session->get("id")}>
FORM;

$block2->closeForm();

include APP_ROOT . '/views/layout/footer.php';
