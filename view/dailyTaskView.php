<?php
require_once "controller/DailyTaskController.php";
include_once "viewHelper.php";

$dailyTask_controller = new DailyTaskController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $dailyTask_controller->getDailyTasks($lang));
}
else
{
    echo prepareResponse("200", $dailyTask_controller->getDailyTasks());
}
?>