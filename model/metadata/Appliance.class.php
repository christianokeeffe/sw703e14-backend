<?php
class Appliance {
    var $id;
    var $name;
	var $price;
	var $energyLabel;
	var $energyConsumption;
	var $type;
    var $passive;
    var $typeString;

    function __construct($id, $name, $price, $energyLabel, $energyConsumption, $type, $passive, $typeString)
    {
        $this->id = $id;
        $this->name = $name;
		$this->price = $price; 
		$this->energyLabel = $energyLabel;
		$this->energyConsumption = $energyConsumption;
		$this->type = $type;
        $this->passive = $passive;
        $this->typeString = $typeString;
    }
}
?>