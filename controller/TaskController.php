<?php
require_once "/model/TaskModel.class.php";
require_once "BaseController.php";

class TaskController extends BaseController {

    function getTasksByApplianceId($id, $lang = 'en')
    {
        $task_model = new TaskModel($this->db);
        return $task_model->getTasksByApplianceId($id,$lang);
    }
}