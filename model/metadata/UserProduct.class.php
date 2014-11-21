<?php
class UserProduct {
    var $userID;
    var $productID; #array of int ID's

    function __construct($userID, $productID)
    {
        $this->userID = $userID;
        $this->productID = $productID;
    }
}
?>