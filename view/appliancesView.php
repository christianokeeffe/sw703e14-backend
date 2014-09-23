<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);


$session = $f3->get('PARAMS.session');

echo json_encode(array(
    'data' => $applianceController->getAppliances()
));
?>