<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);

$json_decoded = json_decode($f3->get('BODY'), true);

$parameters = json_decode($json_decoded["request"], true);

if(isset($json_decoded["language"]))
{
    echo json_encode($applianceController->getAppliance($f3->get('PARAMS.id'),$parameters["language"]));
}
else
{
    echo json_encode($applianceController->getAppliance($f3->get('PARAMS.id')));
}
?>