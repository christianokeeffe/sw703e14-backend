<?php
require_once "controller/UserApplianceController.php";
include_once "viewHelper.php";

$userApplianceController = new UserApplianceController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);

$userAppliance = json_decode($json_decoded["request"]);

$data = $userApplianceController->replaceUserAppliance($userAppliance->user_appliance);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("409", null);
}

?>