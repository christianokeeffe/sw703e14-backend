<?php
$f3 = require('fatfree/base.php');



$f3->route('GET /',
    function() {
        include_once "view/indexView.php";
    }
);

$f3->route('GET /appliance/@id/@lang',
    function($f3) {
        require_once "dbconnect.php";
        include "view/applianceView.php";
    }
);


$f3->run();
?>