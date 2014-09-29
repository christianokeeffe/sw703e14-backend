<?php
require_once "controller/UserController.php";
include_once "viewHelper.php";

$userController = new UserController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);


$user = json_decode($json_decoded['request'])->user;

$data = $userController->insertUser($user);

if($data != null)
{
    echo prepareResponse("200 OK", "200", $data);
}
else
{
    echo prepareResponse("409 CONFLICT", "409", null);
}

?>