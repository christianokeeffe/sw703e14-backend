<?php
require_once "controller/SettingsController.php";
include_once "viewHelper.php";

$settingsController = new SettingsController($f3);

$userID = $lang = $f3->get('PARAMS.userID');

$data = $settingsController->getSettings($userID);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>