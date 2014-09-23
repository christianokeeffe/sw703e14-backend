<?php
require_once "controller/ApplianceController.class.php";
$applianceController = new ApplianceController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo json_encode(array(
        'data' => $applianceController->getAppliance($f3->get('PARAMS.id'), $lang)
    ));
}
else
{
    echo json_encode(array(
        'data' => $applianceController->getAppliance($f3->get('PARAMS.id'))
    ));
}
?>