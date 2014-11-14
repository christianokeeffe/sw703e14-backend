<?php
require_once('simpletest/autorun.php');
require_once('../model/metadata/Appliance.class.php');

class TestOfAppliance extends UnitTestCase {

    function testApplianceCreate() {
        $appliance = new Appliance(1, "testAppliance", 1000, 'A', 1.00314, 3, 1, "Car");
        $this->assertTrue($appliance->id == 1);
        $this->assertTrue($appliance->name == "testAppliance");
        $this->assertTrue($appliance->price == 1000);
        $this->assertTrue($appliance->energyLabel == 'A');
        $this->assertTrue($appliance->energyConsumption == 1.00314);
        $this->assertTrue($appliance->type == 3);
        $this->assertTrue($appliance->passive == 1);
        $this->assertTrue($appliance->typeString == "Car");
    }
}
?>