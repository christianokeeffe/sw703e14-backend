<?php
class Appliance {
    var $id;
    var $name;
	var $price;
	var $energyLabel;
	var $energyConsumption;
	var $type;

    function __construct($id, $name, $price, $energyLabel, $energyConsumption, $type)
    {
        $this->id = $id;
        $this->name = $name;
		$this->price = $price; 
		$this->energyLabel = $energyLabel;
		$this->energyConsumption = $energyConsumption;
		$this->type = $type;
    }
}
?>