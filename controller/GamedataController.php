<?php
require_once "./model/GamedataModel.class.php";
require_once "BaseController.php";

class GamedataController extends BaseController {

	function getUserByID($userID)
    {
        $gamedataModel = new GamedataModel($this->db);
        return $gamedataModel->getUserByID($userID);
    }
	
    function insertGame($game)
    {
        $gamedataModel = new gamedataModel($this->db);

        return $gamedataModel->insertGame($game);
        
    }
	

	
} 