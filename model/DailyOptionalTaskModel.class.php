<?php
require_once "metadata/DailyOptionalTask.class.php";

class DailyOptionalTaskModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function formatResult($result)
    {
        $daily_task = array();
        foreach ($results as $result)
        {
            $daily_task[count($daily_task)] = new DailyOptionalTask($result["id"], $result["name"], $result["taskID"], $result["deadline"], $result["startTime"],
                $result["endTime"]);
        }

        return $daily_task;
    }

    function getDailyOptionalTasks($lang)
    {
        $result = $this->db->exec("SELECT daily_task.id, translation.$lang as name, daily_task.taskID, daily_task.deadline, daily_task.startTime, daily_task.endTime
            FROM daily_task INNER JOIN translation ON daily_task.name = translation.id");

        return $this->formatResult($results);
    }
}
?>