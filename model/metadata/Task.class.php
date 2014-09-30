<?php

class Task {
    var $id;
    var $name;
    var $executionTime;
    var $refAppliance;

    function __construct($id, $name, $executionTime, $refAppliance)
    {
        $this->id = $id;
        $this->name = $name;
        $this->executionTime = $executionTime;
        $this->refAppliance = $refAppliance;
    }
} 