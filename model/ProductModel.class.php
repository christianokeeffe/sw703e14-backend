<?php
require_once "metadata/Product.class.php";

class ProductModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;

    }
/*
    function getProduct($id, $lang)
    {
        $result = $this->db->exec("SELECT $lang FROM products NATURAL JOIN translation WHERE id =  $id");
        return new Product($id, $result[0][$lang]);
    }
*/
    function getUserProducts($userID){
            $results = $this->db->exec("SELECT user_products.productID
            FROM user_products
            WHERE user_products.userID = $userID");
            
            $productIDs = array();

            foreach($results as $result)
            {
                $productIDs[count($productIDs)] = $result["productID"];
            }
            return $productIDs;
        }

        function getAllProducts($lang){
            $results = $this->db->exec("SELECT products.id, name.$lang AS name, products.price, description.$lang as description, products.watt, type.$lang AS type, products.type as typeID
            FROM products
            INNER JOIN translation AS name
            ON name.id = products.name
            INNER JOIN types AS typeID
            ON typeID.typeID = products.type
            INNER JOIN translation AS type
            ON typeID.type = type.id
            INNER JOIN translation AS description
            ON description.id = products.description
            ORDER BY type ASC");

            $products = array();

            foreach($results as $result)
            {
                $products[count($products)] = new Product($result["id"], $result["name"], $result["price"], $result["description"], $result["watt"], $result["type"], $result["typeID"]);
            }
            return $products;
        }
/*
        function getProductsByType($type,$lang){
            $allProducts  = $this->getAllProducts($lang);

            $products = array();
            foreach($allProducts as $product)
            {
                if($product->type == $type)
                {
                    $products[count($products)] = new Product($product->id, $product->name, $product->price, $product->description, $product->watt, $product->type);
                }
            }
            return $products;
        }*/
}