<?php
require_once("HelperFunctions.php");

class TestOfProductRoutes extends HelperFunctions {

    function testGetProductsAll() {
        $response = parent::callGet("/products/3/en/");

        $this->assertTrue($response->status == 200);
    }

}
?>