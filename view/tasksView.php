<?php
require_once "controller/TaskController.php";
include_once "viewHelper.php";
$task_controller = new TaskController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $task_controller->getTasks($lang));
}
else
{
    echo prepareResponse("200", $task_controller->getTasks());
}
?>