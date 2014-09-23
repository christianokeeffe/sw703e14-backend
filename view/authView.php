<?php

require_once "controller/AuthController.php";


$authController = new ApiAuth($f3);

$json_decoded = json_decode($f3->get('BODY'), true);

if($authController->auth($f3->get('BODY'), false))
{
    echo json_encode(array(
        'data' => $authController->provideSession($json_decoded["publicKey"])
    ));
}
?>