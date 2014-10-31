<?php
require_once "./model/SettingsModel.class.php";
require_once "BaseController.php";

class SettingsController extends BaseController {

    function getTasksByApplianceId($id, $lang = 'en')
    {
        $task_model = new TaskModel($this->db);
        return $task_model->getTasksByApplianceId($id,$lang);
    }
}