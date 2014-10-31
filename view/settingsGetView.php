<?php
require_once "controller/SettingsController.php";
include_once "viewHelper.php";

$settingsController = new SettingsController($f3);

$prefname = $lang = $f3->get('PARAMS.prefname');

$data = $settingsController->getSettingByPrefName($prefname);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("401", null);
}
?>