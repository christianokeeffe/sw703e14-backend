<?php

class Task {
    var $id;
    var $name;
    var $executionTime;
    var $refAppliance;
    var $updateValue;

    function __construct($id, $name, $executionTime, $refAppliance, $updateValue)
    {
        $this->id = $id;
        $this->name = $name;
        $this->executionTime = $executionTime;
        $this->refAppliance = $refAppliance;
        $this->updateValue = $updateValue;
    }
} 