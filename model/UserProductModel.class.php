<?php
require_once "metadata/UserProduct.class.php";

class UserProductModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function replaceUserProduct($userProduct, $replaceID)
    {
        $this->db->exec("DELETE FROM user_products WHERE userID = '$userProduct->userID' AND productID = '$replaceID'");

        $this->db->exec("INSERT INTO user_products (userID, productID) VALUES ('$userProduct->userID', '$userProduct->productID')");

        return $userProduct;
    }

    function insertUserProduct($userProduct)
    {
        $this->db->exec("INSERT INTO user_products (userID, productID) VALUES ('$userProduct->userID', '$userProduct->productID')");

        return $userProduct;
    }

}