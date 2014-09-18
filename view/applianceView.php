<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($link);

echo json_encode($applianceController->getAppliance($f3->get('PARAMS.id'), $f3->get('PARAMS.lang')));
?>