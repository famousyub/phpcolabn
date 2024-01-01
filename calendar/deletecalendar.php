<?php
/*
** Application name: phpCollab
** Last Edit page: 2003-10-23
** Path by root: ../calendar/deletecalendar.php
** Authors: Ceam / Fullo
** =============================================================================
**
**               phpCollab - Project Management
**
** -----------------------------------------------------------------------------
** Please refer to license, copyright, and credits in README.TXT
**
** -----------------------------------------------------------------------------
** FILE: deletecalendar.php
**
** DESC: screen: delete calendar item from db
**
** HISTORY:
** 	2003-10-23	-	added new document info
** -----------------------------------------------------------------------------
** TO-DO:
**	check for better template usage
**
** =============================================================================
*/

use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';

$strings = $GLOBALS['strings'];

try {
    $calendars = $container->getCalendarLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$calendarId = $request->query->get("id");

if ($request->isMethod('post')) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->query->get("action") == "delete") {
                $calendarId = str_replace("**", ",", $calendarId);

                try {
                    $delete = $calendars->deleteCalendar($calendarId);
                } catch (Exception $e) {
                    $logger->error('Calendar (delete)', ['Exception message', $e->getMessage()]);
                    $error = $strings["action_not_allowed"];
                }

                phpCollab\Util::headerFunction("../calendar/viewcalendar.php?msg=delete");
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Calendar: Delete' => $request->request->get("id"),
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}

$setTitle .= " : Delete Calendar";
if (strpos($calendarId, "**") !== false) {
    $setTitle .= " Entries";
} else {
    $setTitle .= " Entry";
}

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../calendar/viewcalendar.php?", $strings["calendar"], 'in'));
$blockPage->itemBreadcrumbs($strings["delete"]);
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}


$block1 = new phpCollab\Block();
$block1->form = "saP";
$block1->openForm("../calendar/deletecalendar.php?project={$project}&action=delete&id={$calendarId}", null,
    $csrfHandler);

$block1->heading($strings["delete_calendars"]);

$block1->openContent();
$block1->contentTitle($strings["delete_following"]);

$calendarId = str_replace("**", ",", $calendarId);

$listCalendar = $calendars->openCalendarById($calendarId);

foreach ($listCalendar as $item) {
    echo <<<ROW
<tr class="odd">
    <td class="leftvalue">#{$item['cal_id']}</td>
    <td>{$item['cal_shortname']} <br /> ({$item['cal_subject']})</td>
</tr>
ROW;
}

echo <<<ROW
<tr class="odd">
  <td class="leftvalue">&nbsp;</td>
  <td><input type="submit" name="delete" value="{$strings["delete"]}"> <input type="button" name="cancel" value="{$strings["cancel"]}" onClick="history.back();"></td>
</tr>
ROW;

$block1->closeContent();
$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
