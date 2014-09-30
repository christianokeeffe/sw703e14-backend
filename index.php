<?php
$f3 = require('fatfree/base.php');
$f3->config('app/config.ini');
include "app/config.php";

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

$f3->run();
?>