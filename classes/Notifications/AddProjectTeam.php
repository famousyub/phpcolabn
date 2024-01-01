<?php


namespace phpCollab\Notifications;


use Exception;
use Monolog\Logger;
use phpCollab\Notification;
use Symfony\Component\HttpFoundation\Session\Session;

class AddProjectTeam extends Notification
{
    /**
     * @param $projectDetail
     * @param $notificationsList
     * @param Session $session
     * @param Logger $logger
     * @throws Exception
     */
    public function generateEmail($projectDetail, $notificationsList, Session $session, Logger $logger)
    {
        if ($projectDetail) {
            try {
                $this->getUserinfo($session->get("id"), "from", $logger);

                $this->partSubject = $this->strings["noti_addprojectteam1"];
                $this->partMessage = $this->strings["noti_addprojectteam2"];

                $this->Subject = $this->strings["noti_addprojectteam1"] . " " . $projectDetail["pro_name"];

                if ($projectDetail["pro_org_id"] == "1") {
                    $projectDetail["pro_org_name"] = $this->strings["none"];
                }

                $body = $this->partMessage . "\n\n";
                $body .= $this->strings["project"] . " : " . $projectDetail["pro_name"] . " (" . $projectDetail["pro_id"] . ")\n";
                $body .= $this->strings["organization"] . " : " . $projectDetail["pro_org_name"] . "\n\n";
                $body .= $this->strings["noti_moreinfo"] . "\n";

                // This is hard coded, so it is always "1"
                $organization = "";

                if ($organization == "1") {
                    $body .= $this->root . "/general/login.php?url=projects/viewproject.php%3Fid=" . $projectDetail["pro_id"];
                } elseif ($organization != "1" && $projectDetail["pro_published"] == "0") {
                    $body .= $this->root ."/general/login.php?url=projects_site/home.php%3Fproject=" . $projectDetail["pro_id"];
                }

                $body .= "\n\n" . $this->footer;

                $this->Priority = "3";
                $this->Body = $body;

                if ($notificationsList) {
                    foreach ($notificationsList as $memberNotification) {
                        if ($memberNotification["addProjectTeam"] == "0" && $memberNotification["email_work"] != "") {
                            $this->AddAddress($memberNotification["email_work"], $memberNotification["name"]);
                            $this->Send();
                            $this->ClearAddresses();
                        }
                    }

                }

            } catch (Exception $e) {
                // Log this instead of echoing it?
                throw new Exception($this->ErrorInfo);
            }
        } else {
            throw new Exception('Error sending mail');
        }
    }

}
