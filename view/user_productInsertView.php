<?php
require_once "controller/UserProductController.php";
include_once "viewHelper.php";

$userProductController = new UserProductController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);

$userProduct = json_decode($json_decoded["request"]);



$data = $userProductController->insertUserProduct($userProduct->user_product);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("409", null);
}

?>