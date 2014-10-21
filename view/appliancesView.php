<?php
require_once "controller/ApplianceController.php";
include_once "viewHelper.php";
$applianceController = new ApplianceController($f3);

$lang = $f3->get('PARAMS.lang');
$userID = $f3->get('PARAMS.userID');

if($userID == null)
{
    if(!empty($lang))
    {
        echo prepareResponse("200", $applianceController->getAllAppliances($lang));
    }
    else
    {
        echo prepareResponse("200", $applianceController->getAllAppliances());
    }
}
else
{
    if(!empty($lang))
    {
        echo prepareResponse("200", $applianceController->getAppliances($userID, $lang));
    }
    else
    {
        echo prepareResponse("200", $applianceController->getAppliances($userID));
    }
}
?>