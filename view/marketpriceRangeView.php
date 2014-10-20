<?php

require_once "controller/MarketpriceController.php";
include_once "viewHelper.php";

$marketpriceController = new MarketpriceController($f3);

$fromtime = $f3->get('PARAMS.fromtime');
$totime = $f3->get('PARAMS.totime');

$data = $marketpriceController->getMarketPriceRange($fromtime, $totime);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>