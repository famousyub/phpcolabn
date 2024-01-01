<?php
/*
** Application name: phpCollab
** Last Edit page: 05/11/2004
** Path by root:  ../topics/viewtopic.php
** Authors: Ceam / Fullo
**
** =============================================================================
**
**               phpCollab - Project Management
**
** -----------------------------------------------------------------------------
** Please refer to license, copyright, and credits in README.TXT
**
** -----------------------------------------------------------------------------
** FILE: viewtopic.php
**
** DESC: Screen:  view task mod history
**
** HISTORY:
**	05/11/2004	-	fixed 1059973
** -----------------------------------------------------------------------------
** TO-DO:
** clean code
** =============================================================================
*/

$checkSession = "true";
require_once '../includes/library.php';

$type = $request->query->get('type');
$item = $request->query->get('item');

try {
    $tasks = $container->getTasksLoader();
    $projects = $container->getProjectsLoader();
    $phases = $container->getPhasesLoader();
    $updates = $container->getTaskUpdateService();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$strings = $GLOBALS["strings"];

$subtaskDetail = $targetPhase = $projectDetail = null;

// Subtask
if ($type == "2") {
    $subtaskDetail = $tasks->getSubTaskById($item);

    $taskDetail = $tasks->getTaskById($subtaskDetail["subtas_task"]);

    $projectDetail = $projects->getProjectById($taskDetail["tas_project"]);

    if ($projectDetail["pro_enable_phase"] != "0") {
        $tPhase = $taskDetail["tas_parent_phase"];
        $targetPhase = $phases->getPhasesByProjectIdAndPhaseOrderNum($taskDetail["tas_project"], $tPhase);
    }
}

// Task
if ($type == "1") {
    $taskDetail = $tasks->getTaskById($item);

    $projectDetail = $projects->getProjectById($taskDetail["tas_project"]);

    if ($projectDetail["pro_enable_phase"] != "0") {
        $tPhase = $taskDetail["tas_parent_phase"];
        if (!$tPhase) {
            $tPhase = '0';
        }
        $targetPhase = $phases->getPhasesByProjectIdAndPhaseOrderNum($taskDetail["tas_project"], $tPhase);
    }
}

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
    $projectDetail["pro_name"], "in"));

if ($projectDetail["pro_phase_set"] != "0") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../phases/listphases.php?id=" . $projectDetail["pro_id"],
        $strings["phases"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../phases/viewphase.php?id=" . $targetPhase["pha_id"],
        $targetPhase["pha_name"], "in"));
}

$blockPage->itemBreadcrumbs($blockPage->buildLink("../tasks/listtasks.php?project=" . $projectDetail["pro_id"],
    $strings["tasks"], "in"));
$blockPage->itemBreadcrumbs($blockPage->buildLink("../tasks/viewtask.php?id=" . $taskDetail["tas_id"],
    $taskDetail["tas_name"], "in"));

if ($type == "2") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../subtasks/viewsubtask.php?task=" . $taskDetail["tas_id"] . "&id=" . $subtaskDetail["subtas_id"],
        $subtaskDetail["subtas_name"], "in"));
    $blockPage->itemBreadcrumbs($strings["updates_subtask"]);
}

if ($type == "1") {
    $blockPage->itemBreadcrumbs($strings["updates_task"]);
}
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($GLOBALS["msgLabel"]);
}

$block1 = new phpCollab\Block();

$block1->form = "tdP";
$block1->openForm("./historytask.php", null, $csrfHandler);

if (isset($error) && $error != "") {
    $block1->headingError($strings["errors"]);
    $block1->contentError($error);
}

if ($type == "1") {
    $block1->heading($strings["task"] . " : " . $taskDetail["tas_name"]);
}
if ($type == "2") {
    $block1->heading($strings["subtask"] . " : " . $subtaskDetail["subtas_name"]);
}

$block1->openContent();
$block1->contentTitle($strings["details"]);

$listUpdates = $updates->getUpdates($type, $item);

foreach ($listUpdates as $update) {
    $update["upd_comments"] = trim($update["upd_comments"]);
    if (preg_match('/\[status:([0-9])]/', $update["upd_comments"])) {
        preg_match('|\[status:([0-9])]|i', $update["upd_comments"], $matches);
        $update["upd_comments"] = preg_replace('/\[status:([0-9])]/', $strings["status"] . ": " . $GLOBALS["status"][$matches[1]], $update["upd_comments"]);
    }
    if (preg_match('/\[priority:([0-9])]/', $update["upd_comments"])) {
        preg_match('|\[priority:([0-9])]|i', $update["upd_comments"], $matches);
        $update["upd_comments"] = preg_replace('/\[priority:([0-9])]/', $strings["priority"] . ": " . $GLOBALS["priority"][$matches[1]], $update["upd_comments"]);
    }
    if (preg_match('/\[datedue:([0-9]{4}-[0-9]{1,2}-[0-9]{1,2})]/', $update["upd_comments"])) {
        preg_match('|\[datedue:([0-9]{4}-[0-9]{1,2}-[0-9]{1,2})]|i', $update["upd_comments"], $matches);
        $update["upd_comments"] = preg_replace('/\[datedue:([0-9]{4}-[0-9]{1,2}-[0-9]{1,2})]/', $strings["due_date"] . ": " . $matches[1],
            $update["upd_comments"]);
    }

    $block1->contentRow($strings["posted_by"],
        $blockPage->buildLink($update["upd_mem_email_work"], $update["upd_mem_name"], "mail"));
    if ($update["upd_created"] > $session->get('lastVisited')) {
        $block1->contentRow($strings["when"],
            "<strong>" . phpCollab\Util::createDate($update["upd_created"], $session->get('timezone')) . "</strong>");
    } else {
        $block1->contentRow($strings["when"],
            phpCollab\Util::createDate($update["upd_created"], $session->get('timezone')));
    }
    $block1->contentRow($strings["update"], nl2br($update["upd_comments"]));
    $block1->contentRow("", "", "true");
}

$block1->closeContent();

$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
