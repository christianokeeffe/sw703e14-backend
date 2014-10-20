<?php
require_once "metadata/Marketprice.class.php";

class MarketpriceModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }
	
	function getMarketPriceRange($fromtime, $totime)
    {
        $results = $this->db->exec("SELECT * FROM market_price WHERE time >= $fromtime AND time <= $totime ORDER BY time ASC");

        $prices = array();
        foreach($results as $result)
        {
            $prices[count($prices)] = new Marketprice($result["id"], $result["time"], $result["price"]);
        }

        return $prices;
    }
}