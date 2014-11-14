<?php
require_once("HelperFunctions.php");

class TestOfApplianceController extends HelperFunctions {

    function testGetAllAppliances() {
        $appliance = parent::callGet("/appliances/en/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }
}
?>