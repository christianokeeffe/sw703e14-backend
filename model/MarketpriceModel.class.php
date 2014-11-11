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
        $dtfrom = new DateTime();
        $dtfrom->setTimestamp($fromtime);
        $dtto = new DateTime();
        $dtto->setTimestamp($totime);

        $dtfrom->setDate((intval($dtfrom->format('Y'))-2012)%2+2012,intval($dtfrom->format('m')),intval($dtfrom->format('d')));
        $dtto->setDate((intval($dtto->format('Y'))-2012)%2+2012,intval($dtto->format('m')),intval($dtto->format('d')));
        
        $results;
        if($dtfrom->getTimestamp() > $dtto->getTimestamp())
        {
            $results = $this->db->exec("SELECT * FROM market_price WHERE time >= ".$dtfrom->getTimestamp()."  AND time <= 1388617200 ORDER BY time ASC");  

            $tmp = $this->db->exec("SELECT * FROM market_price WHERE time >= 1325376000  AND time <= ".$dtto->getTimestamp()." ORDER BY time ASC");
            foreach($tmp as $result)
            {
                array_push($results,$result);
            }
        }
        else
        {
            $results = $this->db->exec("SELECT * FROM market_price WHERE time >= ".$dtfrom->getTimestamp()."  AND time <= ".$dtto->getTimestamp()." ORDER BY time ASC");  
        }

        $prices = array();
        $i = $fromtime;
        foreach($results as $result)
        {
            $prices[count($prices)] = new Marketprice($result["id"], $i, $result["price"], $result["solar_price_per_unit"]);
            $i += 3600;
        }

        return $prices;
    }

    function getAverage(){
        $result = $this->db->exec("SELECT AVG(price) as average from market_price");
        return $result;
    }
}