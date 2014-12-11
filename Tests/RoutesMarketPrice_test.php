<?php
require_once("HelperFunctions.php");

class TestOfMarketPriceRoutes extends HelperFunctions {

    function testGetMarketPrices() {
        $fromTime = time();
        $toTime = time()+ (7 * 24 * 60 * 60);

        $response = parent::callGet("/marketprice/1/$fromTime/$toTime/en");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

    function testGetAvgPrice() {
        $response = parent::callGet("/averageprice/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

}
?>