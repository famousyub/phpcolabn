<?php


namespace phpCollab\LoginLogs;

use phpCollab\Database;


class LoginLogsGateway
{
    /**
     * @var Database
     */
    protected $db;
    /**
     * @var mixed
     */
    protected $initrequest;
    /**
     * @var mixed
     */

    /**
     * Logs constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
        $this->initrequest = $GLOBALS['initrequest'];

    }

    /**
     * @param null $sorting
     * @return mixed
     */
    public function getLogs($sorting = null)
    {
        $query = $this->initrequest["logs"]  . $this->orderBy($sorting);
        $this->db->query($query);
        return $this->db->resultset();
    }

    /**
     * @param $memberLogin
     * @return mixed
     */
    public function getLogByLogin($memberLogin)
    {
        $this->db->query($this->initrequest["logs"] . ' WHERE log.login = :member_login');

        $this->db->bind(':member_login', $memberLogin);

        return $this->db->single();
    }

    /**
     * @param $entryData
     * @return mixed
     */
    public function insertLogEntry($entryData) {
        $query = <<<SQL
INSERT INTO {$this->db->getTableName("logs")} 
(login, ip, session, compt, last_visite) 
VALUES (
  :member_login,
  :ip,
  :session,
  :compt,
  :timestamp
)
SQL;

        $this->db->query($query);

        $this->db->bind(':member_login', $entryData['login']);
        $this->db->bind(':ip', $entryData['ip']);
        $this->db->bind(':session', $entryData['session']);
        $this->db->bind(':compt', $entryData['compt']);
        $this->db->bind(':timestamp', $entryData['last_viste']);

        return $this->db->execute();
    }

    /**
     * @param $login
     * @param string $connected
     * @return mixed
     */
    public function setConnectedByLogin($login, string $connected = '') {
        $query = <<<SQL
UPDATE {$this->db->getTableName("logs")} SET connected = :connected WHERE login = :login_id
SQL;
        $this->db->query($query);
        $this->db->bind(':login_id', $login);
        $this->db->bind(':connected', $connected);
        return $this->db->execute();
    }

    /**
     * @param $entryData
     * @return mixed
     */
    public function updateLogEntry($entryData) {
        $query = <<<SQL
UPDATE {$this->db->getTableName("logs")} 
SET 
ip = :ip, 
password = null,
session = :session, 
compt = :compt, 
last_visite = :last_visit 
WHERE login = :login
SQL;
        $this->db->query($query);

        $this->db->bind(':ip', $entryData['ip']);
        $this->db->bind(':session', $entryData['session']);
        $this->db->bind(':compt', $entryData['compt']);
        $this->db->bind(':last_visit', $entryData['last_visite']);
        $this->db->bind(':login', $entryData['login']);

        return $this->db->execute();
    }

    /**
     * @param $date
     * @param $userId
     * @return mixed
     */
    public function updateConnectedTimeForUser($date, $userId) {
        $query = <<<SQL
UPDATE {$this->db->getTableName("logs")} 
SET connected = :date_unix 
WHERE login = :login_session
SQL;

        $this->db->query($query);
        $this->db->bind(':date_unix', $date);
        $this->db->bind(':login_session', $userId);
        return $this->db->execute();
    }

    /**
     * @param $dateunix
     * @return mixed
     */
    public function getConnectedUsers($dateunix)
    {
        $query = "SELECT * FROM {$this->db->getTableName("logs")} WHERE connected > :date_unix";
        $this->db->query($query);
        $this->db->bind(':date_unix', $dateunix);
        return $this->db->resultset();
    }

    /**
     * @param string|null $sorting
     * @return string
     */
    private function orderBy(string $sorting = null): string
    {
        if (!is_null($sorting)) {
            $allowedOrderedBy = ["log.id", "log.login", "log.password", "log.ip", "log.session", "log.compt", "log.last_visite", "log.connected", "mem.profil"];
            $pieces = explode(' ', $sorting);

            if ($pieces) {
                $key = array_search($pieces[0], $allowedOrderedBy);

                if ($key !== false) {
                    $order = $allowedOrderedBy[$key];
                    return " ORDER BY $order $pieces[1]";
                }
            }
        }

        return '';
    }

}
