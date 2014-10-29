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
                $result["endTime"]);
        }

        return $optional_task;
    }

    function getDailyTasks($lang)
    {
        $results = $this->db->exec("SELECT daily_task.id, name.$lang as name, daily_task.taskID, daily_task.deadline, type.$lang as type, daily_task.times
            FROM daily_task
            INNER JOIN translation AS name 
                ON daily_task.name = translation.id 
            INNER JOIN translation AS type 
                ON optional_task.type = translation.id");

        return $this->formatResult($results);
    }
}
?>