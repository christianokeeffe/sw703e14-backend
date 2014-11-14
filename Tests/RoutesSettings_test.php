<?php
require_once("HelperFunctions.php");

class TestOfSettingsRoutes extends HelperFunctions {

    function testGetSettingsByUser() {
        $response = parent::callGet("/settings/1/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }
}
?>