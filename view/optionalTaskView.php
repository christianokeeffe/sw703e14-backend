<?php
require_once "controller/OptionalTaskController.php";
include_once "viewHelper.php";

$optionalTask_controller = new OptionalTaskController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $optionalTask_controller->getOptionalTasks($lang));
}
else
{
    echo prepareResponse("200", $optionalTask_controller->getOptionalTasks());
}
?>