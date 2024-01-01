<?php


namespace phpCollab\Notes;

use phpCollab\Database;

/**
 * Class NotesGateway
 * @package phpCollab\Notes
 */
class NotesGateway
{
    protected $db;
    protected $initrequest;

    /**
     * NotesGateway constructor.
     * @param Database $db
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
        $this->initrequest = $GLOBALS['initrequest'];

    }

    /**
     * @param $noteId
     * @return mixed
     */
    public function getNoteById($noteId)
    {
        $query = $this->initrequest["notes"] . " WHERE note.id = :note_id";
        $this->db->query($query);
        $this->db->bind(':note_id', $noteId);
        return $this->db->single();
    }

    /**
     * @param $noteIds
     * @return mixed
     */
    public function getNotesById($noteIds)
    {
        $ids = explode(',', $noteIds);
        $placeholders = str_repeat('?, ', count($ids) - 1) . '?';
        $sql = $this->initrequest["notes"] . " WHERE note.id IN ($placeholders) ORDER BY note.subject";
        $this->db->query($sql);
        $this->db->execute($ids);
        return $this->db->fetchAll();
    }

    /**
     * @param $memberId
     * @return mixed
     */
    public function getMyNotesWhereProjectIsNotCompletedOrSuspended($memberId)
    {
        $sql = "SELECT note.id FROM {$this->db->getTableName("notes")} note LEFT OUTER JOIN {$this->db->getTableName("projects")} pro ON pro.id = note.project WHERE note.owner = :member_id AND pro.status IN(0,2,3)";
        $this->db->query($sql);
        $this->db->bind(':member_id', $memberId);
        return $this->db->resultset();
    }

    /**
     * @param $ownerId
     * @param $dateFilter
     * @param null $sorting
     * @return mixed
     */
    public function getDateFilteredNotesByOwner($ownerId, $dateFilter, $sorting = null)
    {
        $tmpQuery = " WHERE note.owner = :owner_id AND note.date > :date_filter AND pro.status IN(0,2,3)";
        $sql = $this->initrequest["notes"] . $tmpQuery . $this->orderBy($sorting);
        $this->db->query($sql);
        $this->db->bind(':owner_id', $ownerId);
        $this->db->bind(':date_filter', $dateFilter);
        return $this->db->resultset();
    }

    /**
     * @param $projectId
     * @param null $offset
     * @param null $limit
     * @param $sorting
     * @return mixed
     * @internal param $noteId
     */
    public function getNoteByProject($projectId, $offset = null, $limit = null, $sorting = null)
    {
        $query = $this->initrequest["notes"] . " WHERE note.project = :project_id" . $this->orderBy($sorting) . $this->limit($offset,
                $limit);
        $this->db->query($query);
        $this->db->bind(':project_id', $projectId);
        return $this->db->resultset();
    }

    /**
     * @param $noteData
     * @return string
     */
    public function insertNote($noteData): string
    {
        $sql = "INSERT INTO {$this->db->getTableName("notes")} (project,topic,subject,description,date,owner,published) VALUES (:project,:topic,:subject,:description,:date,:owner,1)";
        $this->db->query($sql);
        $this->db->bind(':project', $noteData["projectMenu"]);
        $this->db->bind(':topic', $noteData["topic"]);
        $this->db->bind(':subject', $noteData["subject"]);
        $this->db->bind(':description', $noteData["description"]);
        $this->db->bind(':date', $noteData["dd"]);
        $this->db->bind(':owner', $noteData["owner"]);
        $this->db->execute();
        return $this->db->lastInsertId();
    }

    /**
     * @param $noteId
     * @param $noteData
     * @return mixed
     */
    public function updateNote($noteId, $noteData)
    {
        $sql = "UPDATE {$this->db->getTableName("notes")} SET project=:project,topic=:topic,subject=:subject,description=:description,date=:date,owner=:owner WHERE id = :note_id";
        $this->db->query($sql);
        $this->db->bind(':project', $noteData["projectMenu"]);
        $this->db->bind(':topic', $noteData["topic"]);
        $this->db->bind(':subject', $noteData["subject"]);
        $this->db->bind(':description', $noteData["description"]);
        $this->db->bind(':date', $noteData["dd"]);
        $this->db->bind(':owner', $noteData["owner"]);
        $this->db->bind(':note_id', $noteId);
        return $this->db->execute();
    }


    /**
     * @param $noteId
     * @return mixed
     */
    public function deleteNotes($noteId)
    {
        if (strpos($noteId, ',')) {
            $ids = explode(',', $noteId);
            $placeholders = str_repeat('?, ', count($ids) - 1) . '?';
            $sql = "DELETE FROM {$this->db->getTableName("notes")} WHERE id IN ($placeholders)";
            $this->db->query($sql);

            $this->db->execute($ids);

            return $this->db->fetchAll();
        } else {
            $query = "DELETE FROM {$this->db->getTableName("notes")} WHERE id IN (:note_id)";
            $this->db->query($query);
            $this->db->bind(':note_id', $noteId);
            return $this->db->execute();
        }
    }

    /**
     * @param $projectIds
     * @return mixed
     */
    public function deletenotesByProjectId($projectIds)
    {
        $projectIds = explode(',', $projectIds);
        $placeholders = str_repeat('?, ', count($projectIds) - 1) . '?';
        $sql = "DELETE FROM {$this->db->getTableName("notes")} WHERE project IN ($placeholders)";
        $this->db->query($sql);
        return $this->db->execute($projectIds);
    }


    /**
     * @param $noteId
     * @return mixed
     */
    public function publishNoteToSite($noteId)
    {
        if (strpos($noteId, ',')) {
            $ids = explode(',', $noteId);
            $placeholders = str_repeat('?, ', count($ids) - 1) . '?';
            $sql = "UPDATE {$this->db->getTableName("notes")} SET published = 0 WHERE id IN($placeholders)";
            $this->db->query($sql);
            return $this->db->execute($ids);
        } else {
            $query = "UPDATE {$this->db->getTableName("notes")} SET published = 0 WHERE id = :note_id";
            $this->db->query($query);
            $this->db->bind(':note_id', $noteId);
            return $this->db->execute();
        }
    }

    /**
     * @param $noteId
     * @return mixed
     */
    public function unPublishNoteFromSite($noteId)
    {
        if (strpos($noteId, ',')) {
            $ids = explode(',', $noteId);
            $placeholders = str_repeat('?, ', count($ids) - 1) . '?';
            $sql = "UPDATE {$this->db->getTableName("notes")} SET published=1 WHERE id IN($placeholders)";
            $this->db->query($sql);
            return $this->db->execute($ids);
        } else {
            $query = "UPDATE {$this->db->getTableName("notes")} SET published=1 WHERE id = :note_id";
            $this->db->query($query);
            $this->db->bind(':note_id', $noteId);
            return $this->db->execute();
        }
    }

    /**
     * @param $query
     * @param null $sorting
     * @param null $limit
     * @param null $rowLimit
     * @return mixed
     */
    public function searchResultNotes($query, $sorting = null, $limit = null, $rowLimit = null)
    {
        $sql = $this->initrequest['notes'] . ' ' . $query . $this->orderBy($sorting) . $this->limit($limit, $rowLimit);
        $this->db->query($sql);
        $this->db->execute();
        return $this->db->resultset();
    }

    /**
     * Returns the LIMIT attribute for SQL strings
     * @param $offset
     * @param $limit
     * @return string
     */
    private function limit($offset, $limit): string
    {
        if (!is_null($offset) && !is_null($limit)) {
            return " LIMIT $limit OFFSET $offset";
        }
        return '';
    }

    /**
     * @param string|null $sorting
     * @return string
     */
    private function orderBy(string $sorting = null): string
    {
        if (!is_null($sorting)) {
            $allowedOrderedBy = [
                "note.id",
                "note.project",
                "note.owner",
                "note.topic",
                "note.subject",
                "note.description",
                "note.date",
                "note.published",
                "mem.id",
                "mem.login",
                "mem.name",
                "mem.email_work"
            ];
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
