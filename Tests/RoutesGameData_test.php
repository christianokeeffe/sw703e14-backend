<?php
require_once("HelperFunctions.php");

class TestOfGameDataRoutes extends HelperFunctions {

    function testGetGameData() {
        $appliance = parent::callGet("/gamedata/1/en/");

        $this->assertTrue($appliance->status == 200);
        $this->assertTrue(count($appliance->data) > 0);
    }

    //latex start unitTestPutGameData
    function testPutGameData() {
        require_once "../model/metadata/Game.class.php";

        $time = time();
        $game = new Game(0, 1, $time, 100, 500, 50, 50, 50, 50, 50);
        $request = json_encode(array(
            'game' => $game
        ));

        $response = parent::callPut("/gamedata/", $request);

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
        $this->assertTrue($response->data->date == $time);
    }
    //latex end
}
?>