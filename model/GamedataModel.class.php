<?php
require_once "metadata/Game.class.php";

class GamedataModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }
	
    function updateGamedata($game)
    {
        $this->db->exec("UPDATE gamedata 
            SET date ='$game->date', savings ='$game->savings', score='$game->score', dishes='$game->dishes', laundry='$game->laundry', hygiene='$game->hygiene' 
            WHERE userID ='$game->userID'");
            
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