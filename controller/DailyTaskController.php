<?php
require_once "./model/DailyTaskModel.class.php";
require_once "BaseController.php";

class DailyTaskController extends BaseController {

    function getDailyTasks($lang = 'en')
    {
        $dailyTask_model = new DailyTaskModel($this->db);
        return  $dailyTask_model->getDailyTasks($lang);
    }
}
?>