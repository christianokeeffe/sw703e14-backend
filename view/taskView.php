<?php
require_once "controller/TaskController.php";
include_once "viewHelper.php";
$task_controller = new TaskController($f3);

$applianceId = $f3->get('PARAMS.applianceid');
$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $task_controller->getTasksByApplianceId($applianceId, $lang));
}
else
{
    echo prepareResponse("200", $task_controller->getTasksByApplianceId($applianceId));
}
?>