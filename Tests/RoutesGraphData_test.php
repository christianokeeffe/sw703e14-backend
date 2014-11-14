<?php
require_once("HelperFunctions.php");

class TestOfGraphDataRoutes extends HelperFunctions {

    function testPutGraphData() {

        require_once "../model/metadata/Graph.class.php";

        $time = time();
        $graph = new Graph(0, 1, 1000, $time);

        $request = json_encode(array(
            'graph' => $graph
        ));

        $response = parent::callPut("/graphdata/", $request);

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
        $this->assertTrue($response->data->date == $time);
    }

    function testGetGraphData() {
        $response = parent::callGet("/graphdata/1/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }
}
?>