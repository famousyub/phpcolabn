<?php
#Application name: PhpCollab
#Status page: 0

use phpCollab\Util;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';

$setTitle .= " : " . $strings["client_subtask_details"];

try {
    $tasks = $container->getTasksLoader();
    $updates = $container->getTaskUpdateService();
    $subtasks = $container->getSetStatusService();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$taskId = !empty($request->query->get('task')) ? $request->query->get('task') : $request->request->get('taskId');
$subtaskId = !empty($request->query->get('id')) ? $request->query->get('id') : $request->request->get('subtaskId');

$subtaskDetail = $tasks->getSubTaskById($subtaskId);

if ($request->isMethod('post') && !empty($subtaskDetail)) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->request->get('action') == "update") {
                $comments = phpCollab\Util::convertData($request->request->get('comments'));

                if (!empty($request->request->get('status')) && $request->request->get('status') == "completed") {
                    $subtasks->set($subtaskId, 0, $comments);
                } else {
                    $subtasks->set($subtaskId, $subtaskDetail["subtas_status"], $comments);
                }
                phpCollab\Util::headerFunction("clienttaskdetail.php?id=$taskId");
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Project Site: Subtask Detail' => $subtaskId,
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}


$taskDetail = $tasks->getTaskById($taskId);

if ($subtaskDetail["subtas_published"] == "0" || $taskDetail["tas_project"] != $session->get("project")) {
    Util::headerFunction("index.php");
}

$bouton[3] = "over";
$titlePage = $strings["client_subtask_details"];

include APP_ROOT . '/projects_site/include_header.php';

echo <<<START_PAGE
<h1 class="heading">{$strings["client_subtask_details"]}</h1>
<table class="nonStriped">
START_PAGE;

if (!empty($taskDetail["tas_name"])) {
    echo <<<TR
    <tr>
        <td>{$strings["task"]} :</td>
        <td><a href="clienttaskdetail.php?id={$taskDetail["tas_id"]}">{$taskDetail["tas_name"]}</a></td>
    </tr>
TR;
}

if (!empty($subtaskDetail["subtas_name"])) {
    echo <<<TR
    <tr>
        <td>{$strings["name"]} :</td>
        <td>{$subtaskDetail["subtas_name"]}</td>
    </tr>
TR;
}

if (!empty($subtaskDetail->subtas_description[0])) {
    $subtaskDescription = nl2br($subtaskDetail["subtas_description"]);
    echo <<<TR
    <tr>
        <td class="leftvalue">{$strings["description"]} :</td>
        <td>$subtaskDescription</td>
    </tr>
TR;
}

$complValue = ($subtaskDetail["subtas_completion"] > 0) ?
    $subtaskDetail["subtas_completion"] . "0 %"
    : $subtaskDetail["subtas_completion"] . " %";

echo <<<TR
    <tr>
        <td>{$strings["completion"]} :</td>
        <td>$complValue</td>
    </tr>
TR;

if ($subtaskDetail["subtas_assigned_to"] != "0") {
    echo <<<TR
    <tr>
        <td>{$strings["assigned_to"]} :</td>
        <td>{$subtaskDetail["subtas_mem_name"]}</td>
    </tr>
TR;
}

if (!empty($subtaskDetail["subtas_comments"])) {
    echo <<<TR
    <tr>
        <td>{$strings["comments"]} :</td>
        <td>{$subtaskDetail["subtas_comments"]}</td>
    </tr>
TR;
}

if (!empty($subtaskDetail["subtas_start_date"])) {
    echo <<<TR
    <tr>
        <td>{$strings["start_date"]} :</td>
        <td>{$subtaskDetail["subtas_start_date"]}</td>
    </tr>
TR;
}

if (!empty($subtaskDetail["subtas_due_date"])) {
    echo <<<TR
    <tr>
        <td>{$strings["due_date"]} :</td>
        <td>{$subtaskDetail["subtas_due_date"]}</td>
    </tr>
TR;
}

echo "<tr>
        <td>{$strings["updates_subtask"]} :</td>
        <td>";

$listUpdates = $updates->getUpdates(2, $subtaskId, 'upd.created DESC');

if ($listUpdates) {
    $updateCount = 1;
    foreach ($listUpdates as $update) {
        $updateCreatedDate = phpCollab\Util::createDate($listUpdates->upd_created[$i], $session->get("timezone"));
        $updateComments = nl2br($listUpdates->upd_comments[$i]);
        echo <<<UPDATE
            <strong>$updateCount</strong> <em>$updateCreatedDate</em><br/>$updateComments<br/>
UPDATE;
        $updateCount++;
    }
} else {
    echo $strings["no_items"];
}

echo "</td></tr>
</table>";


$isChecked = ($subtaskDetail["subtas_status"] == "0") ? 'checked' : '';
echo <<<COMPLETE_TASK_FORM
<div id="completeTask" style="margin-top: 2em;">
    <h1 class="heading">Complete Subtask</h1>
    <form method="post" action="../projects_site/clientsubtaskdetail.php" name="clientTaskUpdate" style="">
        <input type="hidden" name="csrf_token" value="{$csrfHandler->getToken()}" />
        <input name="subtaskId" type="hidden" value="$subtaskId">
        <input name="taskId" type="hidden" value="$task">
    
        <table class="nonStriped" style="margin-top: 0">
            <tr>
                <th colspan="2">{$strings["client_change_status_subtask"]}</th>
            </tr>
            <tr>
                <td>{$strings["status"]} :</td>
                <td><input $isChecked value="completed" name="status" type="checkbox" id="completedCheckbox"> <label for="completedCheckbox">$status[0]</label></td>
            </tr>
            <tr>
                <td class="leftvalue">{$strings["comments"]} :</td>
                <td><textarea cols="40" name="comments" rows="5">{$subtaskDetail["subtas_comments"]}</textarea></td>
            </tr>
            <tr>
                <td>&#160;</td>
                <td><button name="action" type="submit" value="update">{$strings["save"]}"</button></td>
            </tr>
        </table>
    </form>
</div>
COMPLETE_TASK_FORM;

include("include_footer.php");
