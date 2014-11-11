<?php
require_once "controller/ProductController.php";
include_once "viewHelper.php";

$productController = new ProductController($f3);


$data = $productController->getAllProducts();

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>