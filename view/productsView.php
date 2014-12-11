<?php
require_once "controller/ProductController.php";
include_once "viewHelper.php";
$productController = new ProductController($f3);

$lang = $f3->get('PARAMS.lang');
$userID = $f3->get('PARAMS.userID');


if($userID != -1)
{	
    echo prepareResponse("200", $productController->getUserProducts($userID));
}
else if($lang != null)
{
	echo prepareResponse("200", $productController->getAllProducts($lang));
}
else
{
    echo prepareResponse("204", null);
}
?>