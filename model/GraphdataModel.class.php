<?php
require_once "metadata/Graph.class.php";

class GraphdataModel {
 var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function insertGraphdata($graph)
    {
        $this->db->exec("INSERT INTO graphdata (userID, score, date) VALUES ('$graph->userID', '$graph->score', '$graph->date')");

        return $this->getGraphdata($graph->userID);
    }

    function getGraphdata($userID)
    {
        $result = $this->db->exec("SELECT * FROM graphdata WHERE userID =  $userID ORDER BY date DESC");
        
        if(count($result) <= 0)
        {
            return null;
        }

        return new Graph($result[0]["saveID"], $result[0]["userID"], $result[0]["score"], $result[0]["date"]);
    }
}