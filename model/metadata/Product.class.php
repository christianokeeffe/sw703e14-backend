<?php
class Product {
    var $id;
    var $name;
	var $price;
	var $description;
	var $watt;
	var $type;

    function __construct($id, $name, $price, $description, $watt, $type)
    {
        $this->id = $id;
        $this->name = $name;
		$this->price = $price;
		$this->description = $description;
        $this->watt = $watt;
		$this->type = $type;
    }
}
?>