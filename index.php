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

$f3->route('POST /appliance/@id',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroute($f3);
        include "view/applianceView.php";
    }
);

$f3->route('POST /appliances',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroute($f3);
        include "view/appliancesView.php";
    }
);

$f3->run();
?>