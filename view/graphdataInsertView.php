<?php
require_once "./controller/GraphdataController.php";
include_once "viewHelper.php";

$graphdataController = new GraphdataController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);


$graph = json_decode($json_decoded['request']);

$data = $graphdataController->insertGraphdata($graph->graph);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("409", null);
}
?>
