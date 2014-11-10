<?php
class Marketprice {
    var $id;
    var $time;
    var $price;
    var $solar_price_per_unit;

    function __construct($id, $time, $price, $solar_price_per_unit)
    {
        $this->id = $id;
        $this->time = $time;
        $this->price = $price;
        $this->solar_price_per_unit = $solar_price_per_unit;
    }
}

?>