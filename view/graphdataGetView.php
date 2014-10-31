<?php
require_once "controller/GraphdataController.php";
include_once "viewHelper.php";

$graphdataController = new GraphdataController($f3);

$userID = $f3->get('PARAMS.userID');


$data = $graphdataController->getGraphdata($userID);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>