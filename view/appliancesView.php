<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);

$json_decoded = json_decode($f3->get('BODY'), true);

$parameters = json_decode($json_decoded["request"], true);

if(isset($parameters["language"]))
{
    echo json_encode($applianceController->getAppliances($parameters["language"]), JSON_UNESCAPED_UNICODE);
}
else
{
    echo json_encode($applianceController->getAppliances(), JSON_UNESCAPED_UNICODE);
}
?>