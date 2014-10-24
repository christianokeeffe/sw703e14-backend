<?php
require_once "metadata/Game.class.php";

class GamedataModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }
	
    function insertGamedata($game)
    {
        $this->db->exec("INSERT INTO gamedata (userID, date, savings, score, dishes, laundry, hygiene) VALUES ('$game->userID', '$game->date', '$game->savings', '$game->score', '$game->dishes', '$game->laundry', '$game->hygiene')");

        return $this->getGamedata($game->userID);
    }
	
	function getGamedata($userID)
    {
        $result = $this->db->exec("SELECT * FROM gamedata WHERE userID =  $userID ORDER BY date DESC");
        
        if(count($result) <= 0)
        {
            return null;
        }

        return new Game($result[0]["saveID"], $result[0]["userID"], $result[0]["date"], $result[0]["savings"], $result[0]["score"], $result[0]["dishes"], $result[0]["laundry"], $result[0]["hygiene"]);
    }
}