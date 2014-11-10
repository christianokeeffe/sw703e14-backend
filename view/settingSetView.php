<?php
require_once "controller/SettingsController.php";
include_once "viewHelper.php";

$settingsController = new SettingsController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);

$request = json_decode($json_decoded["request"]);

$data = $settingsController->setSetting($request->userID, $request->pref_name, $request->value);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>