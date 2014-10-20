<?php
require_once "./model/MarketpriceModel.class.php";
require_once "BaseController.php";

class MarketpriceController extends BaseController {

	function getMarketPriceRange($fromtime, $totime)
    {
        $marketpriceModel = new MarketpriceModel($this->db);
        return $marketpriceModel->getMarketPriceRange($fromtime, $totime);
    }
	
}