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
            $optional_task[count($optional_task)] = new OptionalTask($result["id"], $result["name"], $result["taskID"], $result["type"], $result["times"],
                $result["endTime"], $result["reward"]);
        }

        return $optional_task;
    }

    function getOptionalTasks($lang)
    {
        $results = $this->db->exec("SELECT optional_task.id, name.$lang as name, optional_task.taskID, optional_task.deadline, type.$lang as type, optional_task.times, optional_task.reward
            FROM optional_task
            INNER JOIN translation AS name 
                ON optional_task.name = translation.id 
            INNER JOIN translation AS type 
                ON optional_task.type = translation.id");

        return $this->formatResult($results);
    }
}
?>