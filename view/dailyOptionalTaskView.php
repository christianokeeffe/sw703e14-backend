<?php
require_once "controller/DailyOptionalTaskController.php";
include_once "viewHelper.php";

$dailyOptionalTask_controller = new DailyOptionalTaskController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $dailyOptionalTask_controller->getDailyOptionalTasks($lang));
}
else
{
    echo prepareResponse("200", $dailyOptionalTask_controller->getDailyOptionalTasks());
}
?>