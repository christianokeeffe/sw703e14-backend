<?php 
require_once "metadata/DailyTask.class.php";

class DailyTaskModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function formatResult($results)
    {
        $daily_task = array();
        foreach ($results as $result)
        {
            $daily_task[count($daily_task)] = new DailyTask($result["id"], $result["name"], $result["taskID"], $result["deadline"], $result["startTime"],
                $result["endTime"], $result["reward"], $result["penalty"]);
        }

        return $daily_task;
    }

    function getDailyTasks($lang)
    {
        $results = $this->db->exec("SELECT daily_task.id, translation.$lang as name, daily_task.taskID, daily_task.deadline, daily_task.startTime, daily_task.endTime, daily_task.reward, daily_task.penalty
            FROM daily_task INNER JOIN translation ON daily_task.name = translation.id");

        return $this->formatResult($results);
    }
}
?>