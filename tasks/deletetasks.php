<?php
#Application name: PhpCollab
#Status page: 0
#Path by root: ../tasks/deletetasks.php

use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;

$checkSession = "true";
require_once '../includes/library.php';


if (empty($request->query->get('id'))) {
    phpCollab\Util::headerFunction($request->server->get("HTTP_REFERER"));
}

$id = $request->query->get('id');
try {
    $tasks = $container->getTasksLoader();
    $assignments = $container->getAssignmentsManager();
    $projects = $container->getProjectsLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$strings = $GLOBALS["strings"];

if ($request->isMethod('post')) {
    try {
        if ($csrfHandler->isValid($request->request->get("csrf_token"))) {
            if ($request->request->get('action') == "delete") {
                $id = str_replace("**", ",", $id);

                $listTasks = $tasks->getTasksById($id);

                foreach ($listTasks as $listTask) {
                    if ($fileManagement == "true") {
                        phpCollab\Util::deleteDirectory("../files/" . $listTask["tas_project"] . "/" . $listTask["tas_id"]);
                    }
                }
                $tasks->deleteTasks($id);
                $assignments->deleteAssignments($id);
                $tasks->deleteSubTasks($id);

                //recompute number of completed tasks of the project
                $projectDetail = $projects->getProjectById($listTasks[0]["tas_project"]);

                phpCollab\Util::projectComputeCompletion($listTasks->tas_project[$i], $container);

                if (!empty($projectDetail)) {
                    phpCollab\Util::headerFunction("../projects/viewproject.php?id={$projectDetail["pro_id"]}&msg=delete");
                } else {
                    phpCollab\Util::headerFunction("../general/home.php?msg=delete");
                }
            }
        }
    } catch (InvalidCsrfTokenException $csrfTokenException) {
        $logger->error('CSRF Token Error', [
            'Tasks: Delete task',
            '$_SERVER["REMOTE_ADDR"]' => $request->server->get("REMOTE_ADDR"),
            '$_SERVER["HTTP_X_FORWARDED_FOR"]'=> $request->server->get('HTTP_X_FORWARDED_FOR')
        ]);
    } catch (Exception $e) {
        $logger->critical('Exception', ['Error' => $e->getMessage()]);
        $msg = 'permissiondenied';
    }
}

$projectDetail = $projects->getProjectById($id);

include APP_ROOT . '/views/layout/header.php';

$blockPage = new phpCollab\Block();
$blockPage->openBreadcrumbs();
if ($project != "") {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/listprojects.php?", $strings["projects"], "in"));
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../projects/viewproject.php?id=" . $projectDetail["pro_id"],
        $projectDetail["pro_name"], "in"));
    $blockPage->itemBreadcrumbs($strings["delete_tasks"]);
} else {
    $blockPage->itemBreadcrumbs($blockPage->buildLink("../general/home.php?", $strings["home"], "in"));
    $blockPage->itemBreadcrumbs($strings["my_tasks"]);
}
$blockPage->closeBreadcrumbs();

if ($msg != "") {
    include '../includes/messages.php';
    $blockPage->messageBox($GLOBALS["msgLabel"]);
}

$block1 = new phpCollab\Block();

$block1->form = "saP";
$block1->openForm("../tasks/deletetasks.php?project=$project&action=delete&id=" . $id, null, $csrfHandler);

$block1->heading($strings["delete_tasks"]);

$block1->openContent();
$block1->contentTitle($strings["delete_following"]);

$id = str_replace("**", ",", $id);
$listTasks = $tasks->getTasksById($id);

foreach ($listTasks as $listTask) {
    echo '<tr class="odd"><td class="leftvalue">#' . $listTask["tas_id"] . '</td><td>' . $listTask["tas_name"] . '</td></tr>';
}

echo <<< TR
<tr class="odd">
    <td class="leftvalue">&nbsp;</td>
    <td><button type="submit" name="action" value="delete">{$strings["delete"]}</button> <input type="button" name="cancel" value="{$strings["cancel"]}" onClick="history.back();"></td>
</tr>
TR;

$block1->closeContent();
$block1->closeForm();

include APP_ROOT . '/views/layout/footer.php';
