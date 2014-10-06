<?php

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

$f3->route('GET /user_appliances/@userID/@session',
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
?>