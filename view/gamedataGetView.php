<?php
require_once "controller/GamedataController.php";
include_once "viewHelper.php";

$gamedataController = new GamedataController($f3);

$userID = $f3->get('PARAMS.userID');


$data = $gamedataController->getGamedata($userID);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("204", null);
}
?>