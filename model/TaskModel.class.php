<?php
require_once "metadata/Task.class.php";

class TaskModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function formatResult($results)
    {
        $tasks = array();
        foreach($results as $result)
        {
            $tasks[count($tasks)] = new Task($result["id"], $result["name"], $result["executionTime"], $result["refAppliance"], $result["updateValue"]);
        }

        return $tasks;
    }

    function getTasksByApplianceId($id, $lang)
    {
        $results = $this->db->exec("SELECT tasks.id, translation.$lang as name, tasks.executionTime, tasks.refAppliance, tasks.updateValue FROM tasks INNER JOIN translation ON tasks.name = translation.id WHERE tasks.refappliance = $id");

        return $this->formatResult($results);
    }

    function getTasks($lang)
    {
        $results = $this->db->exec("SELECT tasks.id, translation.$lang as name, tasks.executionTime, tasks.refAppliance, tasks.updateValue FROM tasks INNER JOIN translation ON tasks.name = translation.id");

        return $this->formatResult($results);
    }
}