<?php
require_once "metadata/OptionalTask.class.php";

class OptionalTaskModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function formatResult($results)
    {
        $optional_task = array();
        foreach ($results as $result)
        {
            $optional_task[count($optional_task)] = new OptionalTask($result["id"], $result["name"], $result["taskID"], $result["deadline"], $result["type"], $result["times"],
                $result["reward"]);
        }

        return $optional_task;
    }

    function getOptionalTasks($lang)
    {
        $results = $this->db->exec("SELECT optional_task.id, name.$lang AS name, optional_task.taskID, deadline.$lang AS deadline, optional_task.type, optional_task.times, optional_task.reward
            FROM optional_task
            INNER JOIN translation AS name 
                ON optional_task.name = name.id 
            INNER JOIN translation AS deadline 
                ON optional_task.deadline = deadline.id");

        return $this->formatResult($results);
    }
}
?>