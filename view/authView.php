<?php
require_once "controller/AuthController.php";
$authController = new ApiAuth($f3);
$json_decoded = json_decode($f3->get('BODY'), true);

if($authController->auth($f3->get('BODY'), false))
{
    $auth = $authController->provideSession($json_decoded["publicKey"]);

    $data = array();
    $data["session"] = $auth->sessionKey;
    $data["expire"] = $auth->expire;

    $response = array();
    $response["status"] = "200 OK";
    $response["status_code"] = "200";
    $response["data"] = $data;

    echo json_encode($response);
}
else
{
    $response = array();
    $response["status"] = "401 Unauthorized";
    $response["status_code"] = "401";
    $response["data"] = null;

    echo json_encode($response);
}
?>