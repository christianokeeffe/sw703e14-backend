<?php
require_once("HelperFunctions.php");

class TestOfDailyTaskRoutes extends HelperFunctions {

    function testGetAllDailyTasks() {
        $response = parent::callGet("/dailyTask/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }
}
?>