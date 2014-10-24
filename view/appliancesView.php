<?php
require_once "controller/ApplianceController.php";
include_once "viewHelper.php";
$applianceController = new ApplianceController($f3);

$lang = $f3->get('PARAMS.lang');
$userID = $f3->get('PARAMS.userID');
$type = $f3->get('PARAMS.type');

if($userID == null && $type == null)
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
else if($type != null)
{
    if(!empty($lang))
    {
        echo prepareResponse("200", $applianceController->getAllAppliancesOfID($type, $lang));
    }
    else
    {
        echo prepareResponse("200", $applianceController->getAllAppliancesOfID($type));
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