<?php

namespace phpCollab;

use Exception;
use InvalidArgumentException;
use PHPMailer\PHPMailer\PHPMailer;

class Notification extends phpmailer
{
    private $container;
    private $lang;
    private $notificationMethod;
    protected $strings;
    protected $root;
    protected $priority;
    protected $status;
    public $partMessage;
    public $footer;
    public $partSubject;
    protected $signature;

    /**
     * Notification constructor.
     * @param Container $container
     * @param null $lang
     * @param null $exceptions
     */
    public function __construct(Container $container, $lang = null, $exceptions = null)
    {
        parent::__construct($exceptions);
        $this->container = $container;

        if (is_null($lang)) {
            $this->lang = (!empty($GLOBALS["lang"])) ? $GLOBALS["lang"] : "en";
        } else {
            $this->lang = $lang;
        }
        $this->notificationMethod = $GLOBALS["notificationMethod"];
        $this->strings = $GLOBALS["strings"];
        $this->root = $GLOBALS["root"];
        $this->priority = $GLOBALS["priority"];
        $this->status = $GLOBALS["status"];

        $this->Mailer = $this->notificationMethod;
        $this->SetLanguage($this->lang);

        if ($this->Mailer == "smtp") {
            $this->isSMTP();
            $this->Host = SMTPSERVER;
            if (defined('SMTPPORT')) {
                $this->Port = (empty(SMTPPORT)) ? 25 : SMTPPORT;    // TCP port to connect to
            } else {
                $this->Port = 25;    // TCP port to connect to
            }
            $this->SMTPAuth = false;
            if (!empty(SMTPLOGIN && !empty(SMTPPASSWORD))) {
                $this->SMTPAuth = true;
                $this->Username = SMTPLOGIN;                    // SMTP username
                $this->Password = SMTPPASSWORD;                 // SMTP password
//                $this->SMTPSecure = 'tls';                      // Enable TLS encryption, `ssl` also accepted
            }
        }

        $this->footer = "--\n" . $this->strings["noti_foot1"] . "\n\n" . $this->strings["noti_foot2"] . "\n$this->root/";

    }

    /**
     * @param $idUser
     * @param $type
     * @param $logger
     * @throws Exception
     */
    public function getUserinfo($idUser, $type, $logger)
    {
        $detailUser = ($this->container->getMembersLoader())->getMemberById($idUser);
        try {
            if ($type == "from") {
                $this->setFrom($detailUser["mem_email_work"], $detailUser["mem_name"]);
            }

            if ($type == "to") {
                $this->AddAddress(
                    $detailUser["mem_email_work"], $detailUser["mem_name"]
                );
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return string
     */
    public function getFooter(): string
    {
        return $this->footer;
    }

    /**
     * @param string $footer
     */
    public function setFooter(string $footer)
    {
        $this->footer = $footer;
    }

    /**
     * @return mixed
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param mixed $signature
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    }

    /**
     * @param $to
     * @param $from
     * @param $subject
     * @param $message
     * @param int $priority
     * @return array
     * @throws Exception
     */
    public function sendMessage(array $to, array $from, string $subject, string $message, int $priority = 3): array
    {
        if (empty($to)) {
            throw new InvalidArgumentException('To details are missing or empty.');
        } else if (empty($from)) {
            throw new InvalidArgumentException('From details are missing or empty.');
        } else if (empty($subject)) {
            throw new InvalidArgumentException('Subject is missing or empty.');
        } else if (empty($message)) {
            throw new InvalidArgumentException('Message is missing or empty.');
        }

        try {

            $this->Subject = $subject;
            $this->Priority = $priority;

            // Set the From field
            $this->setFrom($from["email"], $from["name"]);

            $this->Body = $message;
            $this->AddAddress($to["email"], $to["name"]);

            if (!$this->Send()) {
                return array(false, "Mailer Error: " . $this->ErrorInfo);
            } else {
                $this->ClearAddresses();
                return array(true);
            }
        } catch (Exception $e) {
            throw new Exception('Error sending email notification');
        }

    }

}
