<?php
require_once("HelperFunctions.php");

class TestOfTaskRoutes extends HelperFunctions {

    function testGetTaskByAppliance() {
        $response = parent::callGet("/task/2/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

    function testGetTaskByApplianceNoLang() {
        $response = parent::callGet("/task/2/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

    function testGetTaskAll() {
        $response = parent::callGet("/tasks/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

    function testGetTaskAllNoLang() {
        $response = parent::callGet("/tasks/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }
}
?>