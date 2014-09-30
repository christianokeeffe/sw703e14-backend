<?php
require_once "controller/ApplianceController.php";
include_once "viewHelper.php";
$applianceController = new ApplianceController($f3);

$lang = $f3->get('PARAMS.lang');

if(!empty($lang))
{
    echo prepareResponse("200", $applianceController->getAppliances($lang));
}
else
{
    echo prepareResponse("200", $applianceController->getAppliances());
}
?>