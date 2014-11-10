<?php
$f3 = require('fatfree/base.php');
$f3->config('app/config.ini');
include "app/config.php";
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE');
$f3->route('GET /',
    function($f3) {
        $template=new Template;
        echo $template->render('view/templates/index.htm');
    }
);

$f3->route('POST /auth',
    function($f3) {
        //does not require session, therefore no beforeroute is called.
        include "view/authView.php";
    }
);

include_once "routes_appliance.php";
include_once "routes_user.php";
include_once "routes_task.php";
include_once "routes_gamedata.php";
include_once "routes_marketprice.php";
include_once "routes_dailyTask.php";
include_once "routes_optionalTask.php";
include_once "routes_graphdata.php";
include_once "routes_settings.php";
include_once "routes_user_appliance.php";
include_once "routes_product.php";

$f3->run();
?>