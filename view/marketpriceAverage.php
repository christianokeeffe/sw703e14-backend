<?php

require_once "controller/MarketpriceController.php";
include_once "viewHelper.php";

$marketpriceController = new MarketpriceController($f3);

$data = $marketpriceController->getMarketPriceAverage();

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>