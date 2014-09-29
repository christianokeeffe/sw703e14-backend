<?php
require_once "controller/UserController.php";
include_once "viewHelper.php";

$userController = new UserController($f3);

$username = $lang = $f3->get('PARAMS.username');
$password = $lang = $f3->get('PARAMS.password');

$data = $userController->authUser($username, $password);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("401", null);
}
?>