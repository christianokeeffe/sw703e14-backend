<?php
require_once "controller/GamedataController.php";
include_once "viewHelper.php";

$gamedataController = new GamedataController($f3);
$json_decoded = json_decode($f3->get('BODY'), true);


$game = json_decode($json_decoded['request']);

$data = $gamedataController->insertGame($game);

if($data != null)
{
    echo prepareResponse("200", $data);
}
else
{
    echo prepareResponse("409", null);
}
?>
