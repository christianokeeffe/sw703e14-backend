<?php
require_once "metadata/Task.class.php";

class TaskModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function getTasksByApplianceId($id, $lang)
    {
        $results = $this->db->exec("SELECT * FROM tasks NATURAL JOIN translation WHERE refappliance = $id");

        $tasks = array();
        foreach($results as $result)
        {
            $tasks[count($tasks)] = new Task($result["id"], $result[$lang], $result["executionTime"], $result["refAppliance"]);
        }

        return $tasks;
    }
}