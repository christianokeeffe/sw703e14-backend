<?php
require_once "./model/GamedataModel.class.php";
require_once "BaseController.php";

class GamedataController extends BaseController {

	function getGamedata($userID)
    {
        $gamedataModel = new GamedataModel($this->db);
        return $gamedataModel->getGamedata($userID);
    }
	
    function updateGamedata($game)
    {
        $gamedataModel = new gamedataModel($this->db);
        return $gamedataModel->updateGamedata($game);
        
    }
	
}