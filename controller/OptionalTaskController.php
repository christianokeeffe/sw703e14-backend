<?php
require_once "./model/OptionalTaskModel.class.php";
require_once "BaseController.php";

class OptionalTaskController extends BaseController {

    function getOptionalTasks($lang = 'en')
    {
        $optionalTask_model = new OptionalTaskModel($this->db);
        return  $optionalTask_model->getOptionalTasks($lang);
    }
}
?>