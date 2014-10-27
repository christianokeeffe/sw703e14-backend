<?php
require_once "./model/DailyOptionalTaskModel.class.php";
require_once "BaseController.php";

class DailyOptionalTaskController extends BaseController {

    function getDailyOptionalTasks($lang = 'en')
    {
        $dailyOptionalTask_model = new DailyOptionalTaskModel($this->db);
        return  $dailyOptionalTask_model->getDailyOptionalTasks($lang);
    }
}
?>