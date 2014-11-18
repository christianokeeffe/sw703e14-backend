<?php
require_once "./model/ProductModel.class.php";
require_once "BaseController.php";

class ProductController extends BaseController {
/*
    function getProduct($userID, $lang = 'en')
    {
        $product = new productModel($this->db);
        return $product->getproduct($userID, $lang);
    }
*/
    function getUserProducts($userID, $lang = 'en')
    {
        $product = new productModel($this->db);
        return $product->getUserProducts($userID,$lang);
    }

    function getAllProducts($lang = 'en')
    {
        $product = new productModel($this->db);
        return $product->getAllproducts($lang);
    }
/*
    function getAllProductsByType($id, $lang = 'en')
    {
        $product = new ProductModel($this->db);
        return $product->getAllproductsByType($id, $lang);
    }*/
} 