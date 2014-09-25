<?php
require_once "controller/AuthController.php";
include_once "viewHelper.php";

$authController = new ApiAuth($f3);
$json_decoded = json_decode($f3->get('BODY'), true);

if($authController->auth($f3->get('BODY'), false))
{
    $auth = $authController->provideSession($json_decoded["publicKey"]);

    if($auth == null)
    {
        echo prepareResponse("401 Unauthorized", "401", null);
        die();
    }

    $data = array();
    $data["session"] = $auth->sessionKey;
    $data["expire"] = $auth->expire;

    echo prepareResponse("200 OK", "200", $data);
}
else
{
    echo prepareResponse("401 Unauthorized", "401", null);
}
?>