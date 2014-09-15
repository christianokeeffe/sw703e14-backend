<?php
$f3 = require('fatfree/base.php');

require_once "controller/ApplianceController.class.php";

$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);

$f3->route('GET /appliance/@id/@lang',
    function($f3) {
        include "dbconnect.php";
        $applianceController = new ApplianceController($link);

        echo "Found: ";
        echo $applianceController->getAppliance($f3->get('PARAMS.id'), $f3->get('PARAMS.lang'))->name;
    }
);


$f3->run();
?>