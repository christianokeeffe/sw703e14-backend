<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($link);

echo json_encode($applianceController->getAppliances($f3->get('PARAMS.lang')), JSON_UNESCAPED_UNICODE);
?>