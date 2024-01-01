<?php
/*
** Application name: phpCollab
** Path by root: ../preferences/updateuser.php
**
** =============================================================================
**
**               phpCollab - Project Management
**
** -----------------------------------------------------------------------------
** Please refer to license, copyright, and credits in README.TXT
**
** -----------------------------------------------------------------------------
** FILE: updateuser.php
**
** =============================================================================
*/

use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';

if ($request->isMethod('post')) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->request->get('action') == "update") {
                $logout_time = $request->request->get('logout_time');
                $full_name = $request->request->get('full_name');
                $title = $request->request->get('title');
                $email_work = $request->request->get('email_work');
                $phone_work = $request->request->get('phone_work');
                $phone_home = $request->request->get('phone_home');
                $phone_mobile = $request->request->get('phone_mobile');
                $fax = $request->request->get('fax');
                $timezone = $request->request->get('timezone');
                $organization = $request->request->get('organization');

                if (($logout_time < "30" && $logout_time != "0") || !is_numeric($logout_time)) {
                    $logout_time = "30";
                }

                try {
                    $members->updateMember($session->get("id"), $session->get("login"), $full_name, $email_work, $title,
                        $organization, $phone_work, $phone_home, $phone_mobile, $fax);
                } catch (Exception $e) {
                    $logger->error('Preferences (update)', ['Exception message', $e->getMessage()]);
                    $error = $strings["action_not_allowed"];
                }

                $session->set('logoutTime', $logout_time);
                $session->set('timezone', $timezone);
                $session->set('dateunix', date("U"));
                $session->set('name', $full_name);

                //if mantis bug tracker enabled
                if ($enableMantis == "true") {
                    // Call mantis function for user profile changes..!!!
                    include("../mantis/user_profile.php");
                }
                phpCollab\Util::headerFunction("../preferences/updateuser.php?msg=update");
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Preferences: Update user',
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}


$userPrefs = $members->getMemberById($session->get("id"));

if (empty($userPrefs)) {
    phpCollab\Util::headerFunction("../users/listusers.php?msg=blankUser");
}

$bodyCommand = 'onLoad="document.user_edit_profileForm.full_name.focus();"';
include APP_ROOT . '/views/layout/header.php';


$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($strings["preferences"]);
if ($notifications == "true") {
    $blockPage->itemBreadcrumbs($strings["user_profile"] . " | " . $blockPage->buildLink("../preferences/updatepassword.php?",
            $strings["change_password"],
            'in') . " | " . $blockPage->buildLink("../preferences/updatenotifications.php?", $strings["notifications"],
            'in'));
} else {
    $blockPage->itemBreadcrumbs($strings["user_profile"] . " | " . $blockPage->buildLink("../preferences/updatepassword.php?",
            $strings["change_password"], 'in'));
}
$blockPage->closeBreadcrumbs();

if (!empty($msg)) {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();

$block1->form = "user_edit_profile";
$block1->openForm("../preferences/updateuser.php", null, $csrfHandler);
echo '<input type="hidden" name="organization" value="' . $userPrefs["mem_organization"] . '">';

if (!empty($error)) {
    $block1->headingError($strings["errors"]);
    $block1->contentError($error);
}

$block1->heading($strings["user_profile"] . " : " . $userPrefs["mem_login"]);

$block1->openPaletteIcon();
$block1->paletteIcon(0, "export", $strings["export"]);
$block1->closePaletteIcon();

$block1->openContent();
$block1->contentTitle($strings["edit_user_account"]);

$block1->contentRow($strings["full_name"],
    '<input size="24" style="width: 250px;" type="text" name="full_name" value="' . $userPrefs["mem_name"] . '">');
$block1->contentRow($strings["title"],
    '<input size="24" style="width: 250px;" type="text" name="title" value="' . $userPrefs["mem_title"] . '">');
$block1->contentRow($strings["email"],
    '<input size="24" style="width: 250px;" type="email" name="email_work" value="' . $userPrefs["mem_email_work"] . '">');
$block1->contentRow($strings["work_phone"],
    '<input size="14" style="width: 150px;" type="tel" name="phone_work" value="' . $userPrefs["mem_phone_work"] . '">');
$block1->contentRow($strings["home_phone"],
    '<input size="14" style="width: 150px;" type="tel" name="phone_home" value="' . $userPrefs["mem_phone_home"] . '">');
$block1->contentRow($strings["mobile_phone"],
    '<input size="14" style="width: 150px;" type="tel" name="phone_mobile" value="' . $userPrefs["mem_mobile"] . '">');
$block1->contentRow($strings["fax"],
    '<input size="14" style="width: 150px;" type="tel" name="fax" value="' . $userPrefs["mem_fax"] . '">');
$block1->contentRow($strings["logout_time"] . $blockPage->printHelp("user_autologout"),
    '<input size="14" style="width: 150px;" type="text" name="logout_time" value="' . $userPrefs["mem_logout_time"] . '"> sec.');

if ($gmtTimezone == (int)"true") {
    $selectTimezone = '<select name="timezone">';
    for ($i = -12; $i <= +12; $i++) {
        if ($userPrefs["mem_timezone"] == $i) {
            $selectTimezone .= '<option value="' . $i . '" selected>' . $i . '</option>';
        } else {
            $selectTimezone .= '<option value="' . $i . '">' . $i . '</option>';
        }
    }
    $selectTimezone .= '</select>';
    $block1->contentRow($strings["user_timezone"] . $blockPage->printHelp("user_timezone"), $selectTimezone);
}

if ($userPrefs["mem_profil"] == "0") {
    $block1->contentRow($strings["permissions"], $strings["administrator_permissions"]);
} elseif ($userPrefs["mem_profil"] == "1") {
    $block1->contentRow($strings["permissions"], $strings["project_manager_permissions"]);
} elseif ($userPrefs["mem_profil"] == "2") {
    $block1->contentRow($strings["permissions"], $strings["user_permissions"]);
} elseif ($userPrefs["mem_profil"] == "5") {
    $block1->contentRow($strings["permissions"], $strings["project_manager_administrator_permissions"]);
}

$block1->contentRow($strings["account_created"],
    phpCollab\Util::createDate($userPrefs["mem_created"], $session->get("timezone")));
$block1->contentRow("", '<button type="submit" name="action" value="update">' . $strings["save"] . '</button>');

$block1->closeContent();
$block1->closeForm();

$block1->openPaletteScript();
$block1->paletteScript(0, "export", "../users/exportuser.php?id={$session->get("id")}", "true,true,true",
    $strings["export"]);
$block1->closePaletteScript(count($userPrefs), array_column($userPrefs, 'mem_id'));

include APP_ROOT . '/views/layout/footer.php';
