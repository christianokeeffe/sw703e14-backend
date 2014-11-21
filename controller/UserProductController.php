<?php
require_once "./model/UserProductModel.class.php";
require_once "BaseController.php";

class UserProductController extends BaseController {

    function replaceUserProduct($user_product, $replaceID)
    {
        $userProductModel = new UserProductModel($this->db);

        return $userProductModel->replaceUserProduct($user_product, $replaceID);
    }

    function insertUserProduct($user_product)
    {
    	$userProductModel = new UserProductModel($this->db);

        return $userProductModel->insertUserProduct($user_product);
    }
}