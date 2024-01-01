<?php
#Application name: PhpCollab
#Status page: 0

session_cache_limiter('none');     // suppress error messages for PHP version < 4.0.2
error_reporting(0);
$checkSession = "true";
require_once '../includes/library.php'; // starts session and writes session cache headers

try {
    $files = $container->getFilesLoader();
} catch (Exception $exception) {
    $logger->error('Exception', ['Error' => $exception->getMessage()]);
}

$fileDetail = $files->getFileById($request->query->get('id'));

if ($fileDetail) {
    // test if file is published and part of the current project
    if ($fileDetail["fil_published"] == "1" || $fileDetail["fil_project"] != $session->get("project")) {
        phpCollab\Util::headerFunction("index.php");
    } else {
        $fileAction = $container->getFileDownloadService();

        try {
            $filename = $fileDetail["fil_name"];

            if (empty($fileDetail["fil_task"])) {
                $fileAction->setFilesPath(APP_ROOT . "/files/" . $fileDetail["fil_project"] . "/" . $filename);
            } else {
                $fileAction->setFilesPath(APP_ROOT . "/files/" . $fileDetail["fil_project"] . "/" . $fileDetail["fil_task"] . "/" . $filename);
            }

            if ($request->query->get('mode') == "download") {
                $fileAction->downloadFile($filename);
            } elseif ($request->query->get('mode') == "view") {
                $fileAction->viewFile($filename);
            }
        } catch (Exception $exception) {
            $logger->error('Project Site (access file)', ['Exception message', $e->getMessage()]);
            $error = $strings["action_not_allowed"];
        }
    }
}
