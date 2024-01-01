<?php
/*
** Application name: phpCollab
** Last Edit page: 04/12/2004
** Path by root: ../notes/editnote.php
** Authors: Ceam / Fullo
** =============================================================================
**
**               phpCollab - Project Management
**
** -----------------------------------------------------------------------------
** Please refer to license, copyright, and credits in README.TXT
**
** -----------------------------------------------------------------------------
** FILE: editnote.php
**
** DESC: screen: edit a note
**
** HISTORY:
** 	04/12/2004	-	added new document info
**	04/12/2004  -	fixed [ 1077236 ] Calendar bug in Client's Project site
**  25/04/2006  -   replaced JavaScript Calendar functions
** -----------------------------------------------------------------------------
** TO-DO:
** =============================================================================
*/


use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';
include '../includes/customvalues.php';

$action = $request->query->get('action');
$project = $request->query->get('project');
$id = $request->query->get('id');
$strings = $GLOBALS["strings"];

try {
    $notes = $container->getNotesLoader();
    $projects = $container->getProjectsLoader();
    $teams = $container->getTeams();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

if ($id != "" && $action != "add") {
    $noteDetail = $notes->getNoteById($id);
    $project = $noteDetail["note_project"];

    if ($noteDetail["note_owner"] != $session->get("id")) {
        phpCollab\Util::headerFunction("../notes/listnotes.php?project=" . $project . "&msg=noteOwner");
    }
}
$projectDetail = $projects->getProjectById($project);

$teamMember = "false";

$teamMember = $teams->isTeamMember($project, $session->get("id"));

//case update note entry
if ($id != "") {
    //case update note entry
    if ($action == "update") {

        if ($request->isMethod('post')) {
            try {
                if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
                    $noteData = $request->request->all();
                    $noteData["subject"] = phpCollab\Util::convertData($request->request->get('subject'));
                    $noteData["description"] = phpCollab\Util::convertData($request->request->get('description'));
                    $noteData["owner"] = $session->get("id");

                    $updatedNote = $notes->updateNote($id, $noteData);

                    phpCollab\Util::headerFunction("../notes/viewnote.php?id=" . $id . "&msg=update");
                }
            } catch (InvalidCsrfTokenException $csrfTokenException) {
                $logger->error('CSRF Token Error', [
                    'Notes: Edit note' => $request->query->get("id"),
                    '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
                    '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
                ]);
            } catch (Exception $e) {
                $logger->critical('Exception', ['Error' => $e->getMessage()]);
                $msg = 'permissiondenied';
            }
        }
    }

    //set value in form
    $dd = $noteDetail["note_date"];
    $subject = $noteDetail["note_subject"];
    $description = $noteDetail["note_description"];
    $topic = $noteDetail["note_topic"];
}

//case add note entry
if ($id == "") {

    //case add note entry
    if ($action == "add") {
        if ($request->isMethod('post')) {
            try {
                if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
                    $noteData = $request->request->all();
                    $noteData["subject"] = phpCollab\Util::convertData($request->request->get('subject'));
                    $noteData["description"] = phpCollab\Util::convertData($request->request->get('description'));
                    $noteData["owner"] = $session->get("id");

                    $num = $notes->addNote($noteData);

                    phpCollab\Util::headerFunction("../notes/viewnote.php?id=" . $num . "&msg=add");
                }
            } catch (InvalidCsrfTokenException $csrfTokenException) {
                $logger->error('CSRF Token Error', [
                    'Notes: Add note',
                    '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
                    '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
                ]);
            } catch (Exception $e) {
                $logger->critical('Exception', ['Error' => $e->getMessage()]);
                $msg = 'permissiondenied';
            }
        }
    }
}

$bodyCommand = "onLoad=\"document.etDForm.subject.focus();\"";
$includeCalendar = true; //Include Javascript files for the pop-up calendar
include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
    $projectDetail["pro_name"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../notes/listnotes.php?project=" . $projectDetail["pro_id"],
    $strings["notes"], "in"));
if ($id == "") {
    $blockPage->itemBreadcrumbs($strings["add_note"]);
}
if ($id != "") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../notes/viewnote.php?id=" . $noteDetail["note_id"],
        $noteDetail["note_subject"], "in"));
    $blockPage->itemBreadcrumbs($strings["edit_note"]);
}
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($msgLabel);
}

$block1 = new phpCollab\Block();
if ($id == "") {
    $block1->form = "etD";
    $block1->openForm("../notes/editnote.php?project=" . $project . "&id=" . $id . "&action=add&#" . $block1->form . "Anchor",
        null, $csrfHandler);
}
if ($id != "") {
    $block1->form = "etD";
    $block1->openForm("../notes/editnote.php?project=" . $project . "&id=" . $id . "&action=update&#" . $block1->form . "Anchor",
        null, $csrfHandler);
}

if (isset($error) && $error != "") {
    $block1->headingError($strings["errors"]);
    $block1->contentError($error);
}
if ($id == "") {
    $block1->heading($strings["add_note"]);
}
if ($id != "") {
    $block1->heading($strings["edit_note"] . " : " . $noteDetail["note_subject"]);
}

$block1->openContent();
$block1->contentTitle($strings["details"]);

$listProjects = $teams->getTeamByMemberId($session->get("id"), $block1->sortingValue);

echo "<tr class='odd'><td class='leftvalue'>" . $strings["project"] . " :</td><td><select name='projectMenu'>";

foreach ($listProjects as $project) {
    if ($project["tea_pro_id"] == $noteDetail["note_project"] || $project == $project["tea_pro_id"]) {
        echo '<option value="' . $project["tea_pro_id"] . '" selected>' . $project["tea_pro_name"] . '</option>';
    } else {
        echo '<option value="' . $project["tea_pro_id"] . '">' . $project["tea_pro_name"] . '</option>';
    }
}

echo "</select></td></tr>";

$block1->contentRow($strings["date"],
    '<input type="text" name="dd" id="noteDate" size="20" value="' . $dd . '"><input type="button" value=" ... " id="trigNoteDate">');
echo <<<JAVASCRIPT
<script type='text/javascript'>
    Calendar.setup({
        inputField     :    'noteDate',
        button         :    'trigNoteDate',
        $calendar_common_settings
    })
</script>
JAVASCRIPT;

$comptTopic = count($topicNote);

if ($comptTopic != "0") {
    echo <<<ROW
<tr class="odd">
    <td class="leftvalue">{$strings["topic"]} :</td>
    <td>
        <select name="topic">
            <option value="">{$strings["choice"]}</option>
ROW;

    for ($i = 1; $i <= $comptTopic; $i++) {
        if ($topic == $i) {
            echo "<option value='$i' selected>$topicNote[$i]</option>";
        } else {
            echo "<option value='$i'>$topicNote[$i]</option>";
        }
    }
    echo "</select></td></tr>";
}

$block1->contentRow($strings["subject"],
    "<input size='44' value='$subject' style='width: 400px' name='subject' maxlength='100' type='TEXT'>");
$block1->contentRow($strings["description"],
    "<textarea rows='10' style='width: 400px; height: 160px;' name='description' cols='47'>$description</textarea>");
$block1->contentRow("", '<input type="submit" value="' . $strings["save"] . '">');
$block1->closeContent();
$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
