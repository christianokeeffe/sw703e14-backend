<?php
$f3 = require('fatfree/base.php');

/*
$f3->route('GET /',
    function() {
        include_once "view/indexView.php";
    }
);
*/
$f3->route('GET /',
    function($f3) {
        $template=new Template;
        echo $template->render('view/templates/index.htm');
        // Above lines can be written as:
        // echo Template::instance()->render('appliance.htm');
    }
);

$f3->route('GET /appliance/@id/@lang',
    function($f3) {
        require_once "dbconnect.php";
        include "view/applianceView.php";
    }
);

$f3->route('GET /appliances/@lang',
    function($f3) {
        require_once "dbconnect.php";
        include "view/appliancesView.php";
    }
);


$f3->run();
?>