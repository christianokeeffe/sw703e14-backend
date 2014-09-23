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


$f3->route('GET /appliance/@id/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/applianceView.php";
    }
);

$f3->route('GET /appliance/@id/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/applianceView.php";
    }
);

$f3->route('GET /appliances/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/appliancesView.php";
    }
);

$f3->route('GET /appliances/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/appliancesView.php";
    }
);

$f3->route('POST /auth',
    function($f3) {
        //does not require session, therfore no beforeroute is called.
        include "view/authView.php";
    }
);

$f3->run();
?>