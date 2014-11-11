<?php
require_once "./controller/ProductController.php";
include_once "viewHelper.php";

$productController = new ProductController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);


$product = json_decode($json_decoded['request']);

$data = $productController->updateProduct($product->product);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("409", null);
}
?>
