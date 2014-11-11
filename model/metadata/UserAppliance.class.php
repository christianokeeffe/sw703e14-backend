<?php
class UserAppliance {
    var $id;
    var $appliances; #array of int ID's

    function __construct($id, $appliances)
    {
        $this->id = $id;
        $this->appliances = $appliances;
    }
}
?>