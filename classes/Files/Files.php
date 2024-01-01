<?php


namespace phpCollab\Files;

use Exception;
use InvalidArgumentException;
use phpCollab\Container;
use phpCollab\Database;
use phpCollab\Util;

/**
 * Class Files
 * @package phpCollab\Files
 */
class Files
{
    protected $files_gateway;
    protected $db;
    protected $strings;
    protected $root;

    /**
     * @var Container
     */
    protected $container;

    /**
     * Files constructor.
     * @param Database $database
     * @param Container $container
     */
    public function __construct(Database $database, Container $container)
    {
        $this->db = $database;
        $this->container = $container;
        $this->files_gateway = new FilesGateway($this->db);
        $this->strings = $GLOBALS["strings"];
        $this->root = $GLOBALS["root"];
    }

    /**
     * @param $projectId
     * @param $taskId
     * @return mixed
     */
    public function setProjectByTaskId($projectId, $taskId)
    {
        return $this->files_gateway->setProjectByTaskId($projectId, $taskId);
    }

    /**
     * @param $fileId
     * @param $phase
     * @return mixed
     */
    public function setPhase($fileId, $phase)
    {
        return $this->files_gateway->setPhase($fileId, $phase);
    }

    /**
     * @param $fileId
     * @return mixed
     */
    public function getFiles($fileId)
    {
        return $this->files_gateway->getFiles($fileId);
    }

    /**
     * @param $fileId
     * @return mixed
     */
    public function getFileById($fileId)
    {
        return $this->files_gateway->getFileById($fileId);
    }

    /**
     * @param $taskId
     * @param null $sorting
     * @return mixed
     * @internal param $fileId
     */
    public function getFilesByTaskIdAndVCParentEqualsZero($taskId, $sorting = null)
    {
        return $this->files_gateway->getFilesByTaskIdAndVCParentEqualsZero($taskId, $sorting);
    }

    /**
     * @param $projectId
     * @return mixed
     */
    public function getFilesByProjectIdAndPhaseNotEqualZero($projectId)
    {
        return $this->files_gateway->getFilesByProjectIdAndPhaseNotEqualZero($projectId);
    }

    /**
     * @param $projectId
     * @param $phaseId
     * @param $sorting
     * @return mixed
     */
    public function getFilesByProjectAndPhaseWithoutTasksAndParent($projectId, $phaseId, $sorting)
    {
        $projectId = filter_var($projectId, FILTER_VALIDATE_INT);
        $phaseId = filter_var($phaseId, FILTER_VALIDATE_INT);
        $sorting = filter_var($sorting, FILTER_SANITIZE_STRING);
        return $this->files_gateway->getFilesByProjectAndPhaseWithoutTasksAndParent($projectId, $phaseId, $sorting);
    }

    /**
     * @param mixed $filesId Can be a single ID or multiple IDs
     * @return mixed
     */
    public function publishFile($filesId)
    {
        $filesId = filter_var($filesId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->publishFiles($filesId);
    }

    /**
     * @param $filesId
     * @return mixed
     */
    public function publishFileByIdOrVcParent($filesId)
    {
        $filesId = filter_var($filesId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->publishFilesByIdOrInVcParent($filesId);
    }

    /**
     * @param $filesId
     * @return mixed
     */
    public function unPublishFileByIdOrVcParent($filesId)
    {
        $filesId = filter_var($filesId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->unPublishFilesByIdOrInVcParent($filesId);
    }

    /**
     * @param $filesId
     * @return mixed
     */
    public function unPublishFiles($filesId)
    {
        $filesId = filter_var($filesId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->unPublishFiles($filesId);
    }

    /**
     * @param $fileId
     * @param int $fileStatus
     * @param null $sorting
     * @return mixed
     */
    public function getFileVersions($fileId, int $fileStatus = 3, $sorting = null)
    {
        $fileId = filter_var((string)$fileId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->getFileVersions($fileId, $fileStatus, $sorting);
    }

    /**
     * @param $fileId
     * @param null $sorting
     * @return mixed
     */
    public function getFilePeerReviews($fileId, $sorting = null)
    {
        $fileId = filter_var((string)$fileId, FILTER_SANITIZE_STRING);
        return $this->files_gateway->getFilePeerReviews($fileId, $sorting);
    }

    /**
     * @param $fileId
     * @return mixed
     */
    public function deleteFile($fileId)
    {
        $fileId = filter_var((string)$fileId, FILTER_SANITIZE_STRING);

        return $this->files_gateway->deleteFiles($fileId);
    }

    /**
     * @param $projectIds
     * @return mixed
     */
    public function deleteFilesByProjectId($projectIds)
    {
        $projectIds = filter_var((string)$projectIds, FILTER_SANITIZE_STRING);
        return $this->files_gateway->deleteFilesByProjectId($projectIds);
    }

    /**
     * @param $approverId
     * @param $comment
     * @param $fileId
     * @param $fileStatus
     * @param null $approvalDate
     * @return mixed
     */
    public function updateApprovalTracking($approverId, $comment, $fileId, $fileStatus, $approvalDate = null)
    {
        if (is_null($approvalDate)) {
            $approvalDate = date('Y-m-d h:i');
        }
        return $this->files_gateway->updateApproval($fileId, $approverId, $comment, $approvalDate, $fileStatus);
    }

    /**
     * @param $owner
     * @param $project
     * @param $phase
     * @param $task
     * @param $comments
     * @param $status
     * @param $vcVersion
     * @param null $vcParent
     * @return mixed
     */
    public function addFile($owner, $project, $phase, $task, $comments, $status, $vcVersion, $vcParent = null)
    {
        if (!empty($comments)) {
            $comments = Util::convertData($comments);
        }

        return $this->files_gateway->addFile($owner, $project, $phase, $task, $comments, $status, $vcVersion,
            $vcParent);
    }

    /**
     * Updates the file entry and returns the updated entry
     * @param $fileId
     * @param $name
     * @param $date
     * @param $size
     * @param $extension
     * @param null $vc_version
     * @return mixed
     */
    public function updateFile($fileId, $name, $date, $size, $extension, $vc_version = null)
    {
        if (empty($date)) {
            $date = date('Y-m-d h:i');
        }

        $this->files_gateway->updateFile($fileId, $name, $date, $size, $extension, $vc_version);
        return $this->getFileById($fileId);

    }

    /**
     * @param $fileDetails
     * @param $projectDetails
     * @param $notificationDetails
     * @param $userId
     * @param $userName
     * @param $userLogin
     * @throws Exception
     */
    public function sendFileUploadedNotification(
        $fileDetails,
        $projectDetails,
        $notificationDetails,
        $userId,
        $userName,
        $userLogin
    ) {
        if ($fileDetails && $projectDetails && $notificationDetails) {
            $mail = $this->container->getNotification();
            try {

                $mail->setFrom($projectDetails["pro_mem_email_work"], $projectDetails["pro_mem_name"]);

                $mail->partSubject = $this->strings["noti_newfile1"];
                $mail->partMessage = $this->strings["noti_newfile2"];

                $subject = $mail->partSubject . " " . $fileDetails["fil_name"];


                if ($projectDetails["pro_org_id"] == "1") {
                    $projectDetails["pro_org_name"] = $this->strings["none"];
                }

                if (
                    (
                        ($notificationDetails["organization"] != "1")
                        && ($fileDetails["fil_published"] == "0")
                        && ($projectDetails["pro_published"] == "0")
                    ) || ($notificationDetails["organization"] == "1")
                ) {
                    if (
                        ($notificationDetails["uploadFile"] == "0")
                        && ($notificationDetails["email_work"] != "")
                        && ($notificationDetails["member"] != $userId)
                    ) {

                        $body = <<<MAILBODY
$mail->partMessage

{$this->strings["upload"]} : {$fileDetails["fil_name"]}
{$this->strings["posted_by"]} : $userName ($userLogin)

{$this->strings["comments"]} : 
{$fileDetails["fil_comments"]}

{$this->strings["project"]} : {$projectDetails["pro_name"]} ({$projectDetails["pro_id"]})
{$this->strings["organization"]} : {$projectDetails["pro_org_name"]}

{$this->strings["noti_moreinfo"]} 
MAILBODY;

                        if ($notificationDetails["organization"] == "1") {
                            $body .= $this->root . "/general/login.php?url=linkedcontent/viewfile.php?id=" . $fileDetails["fil_id"];
                        }
                        if ($notificationDetails["organization"] != "1") {
                            $body .= $this->root . "/general/login.php?url=projects_site/home.php?project=" . $projectDetails["pro_id"];
                        }

                        $body .= "\n\n" . $mail->footer;

                        $mail->Subject = $subject;
                        $mail->Priority = "3";
                        $mail->Body = $body;
                        $mail->AddAddress($notificationDetails["email_work"], $notificationDetails["name"]);
                        $mail->Send();
                        $mail->ClearAddresses();
                    }
                }


            } catch (Exception $e) {
                // Log this instead of echoing it?
                throw new Exception($mail->ErrorInfo);
            }
        } else {
            if (empty($fileDetails)) {
                throw new InvalidArgumentException('File Details is missing or empty.');
            } else {
                if (empty($projectDetails)) {
                    throw new InvalidArgumentException('Project Details is missing or empty.');
                } else {
                    if (empty($notificationDetails)) {
                        throw new InvalidArgumentException('Notification Details is missing or empty.');
                    } else {
                        throw new Exception('Error sending file uploaded notification');
                    }
                }
            }
        }

    }

    /*
     * Project Site Related Methods
     */

    /**
     * @param $projectId
     * @param null $sorting
     * @return mixed
     */
    public function getProjectSiteFiles($projectId, $sorting = null)
    {
        return $this->files_gateway->getProjectSiteFiles($projectId, $sorting);
    }
}
