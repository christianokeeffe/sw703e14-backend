<?php
require_once "./model/GraphdataModel.class.php";
require_once "BaseController.php";

class GraphdataController extends BaseController {

    function insertGraphdata($graph)
    {
        $graphdataModel = new graphdataModel($this->db);
        return $graphdataModel->insertGraphdata($graph);
    }

    function getGraphdata($userID)
    {
        $graphdataModel = new graphdataModel($this->db);
        return $graphdataModel->getGraphdata($userID);
    }
}