<?php
require_once("HelperFunctions.php");

class TestOfOptionalTaskRoutes extends HelperFunctions {

    function testGetOptionalTask() {
        $response = parent::callGet("/optionalTask/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }
}
?>