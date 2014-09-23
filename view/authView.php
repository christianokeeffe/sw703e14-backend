<?php

require_once "controller/AuthController.php";


$authController = new ApiAuth($f3);

$json_decoded = json_decode($f3->get('BODY'), true);

if($authController->auth($f3->get('BODY'), false))
{
    $auth = $authController->provideSession($json_decoded["publicKey"]);

    $response    = json_encode(array(
        'session' => $auth->sessionKey,
        'expire' => $auth->expire
    ));


    echo json_encode(array(
        'data' => $response
    ));
}
?>