<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);

$json_decoded = json_decode($f3->get('BODY'), true);

if(isset($json_decoded["language"]))
{
    echo json_encode($applianceController->getAppliance($f3->get('PARAMS.id'),$json_decoded["language"]));
}
else
{
    echo json_encode($applianceController->getAppliance($f3->get('PARAMS.id')));
}
?>