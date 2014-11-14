<?php
require_once("HelperFunctions.php");

class TestOfUserApplianceRoutes extends HelperFunctions {

     function testPostUserAppliance() {

        require_once "../model/metadata/UserAppliance.class.php";

        $user_appliance = new UserAppliance(0, [0,1,4,5,6]);

        $request = json_encode(array(
            'user_appliance' => $user_appliance
        ));

        $response = parent::callPost("/user_appliance", $request);

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }


}
?>