<?php
class Appliance {
    var $id;
    var $name;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

?>