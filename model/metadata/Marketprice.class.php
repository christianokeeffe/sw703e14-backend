<?php
class Marketprice {
    var $id;
    var $time;
    var $price;


    function __construct($id, $time, $price)
    {
        $this->id = $id;
        $this->time = $time;
        $this->price = $price;
    }
}

?>