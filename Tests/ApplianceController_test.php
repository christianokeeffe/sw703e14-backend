<?php
require_once("HelperFunctions.php");

class TestOfApplianceController extends HelperFunctions {

    function testGetAllAppliances() {
        $appliance = parent::callGet("/appliances/en/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }

    function testGetAnAppliance() {
        $appliance = parent::callGet("/appliance/1/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }

    function testGetAnApplianceWithLang() {
        $appliance = parent::callGet("/appliance/1/da/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }

    function testGetAppliancesByUserid() {
        $appliance = parent::callGet("/appliances/1/en/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }

    function testGetAppliancesByType() {
        $appliance = parent::callGet("/appliancesType/3/en/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }
}
?>