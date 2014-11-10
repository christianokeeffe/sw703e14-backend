<?php
require_once "controller/ProductController.php";
include_once "viewHelper.php";

$productController = new ProductController($f3);

$userID = $f3->get('PARAMS.userID');


$data = $productController->getProduct($userID);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>