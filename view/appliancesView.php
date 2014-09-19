<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($link);

$json_decoded = json_decode($f3->get('BODY'), true);

if(isset($json_decoded["language"]))
{
    echo json_encode($applianceController->getAppliances($json_decoded["language"]), JSON_UNESCAPED_UNICODE);
}
else
{
    echo json_encode($applianceController->getAppliances(), JSON_UNESCAPED_UNICODE);
}
?>