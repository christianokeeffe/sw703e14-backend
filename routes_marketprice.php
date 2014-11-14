<?php
$f3->route('GET /marketprice/@fromtime/@totime/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/marketpriceRangeView.php";
    }
);

$f3->route('GET /averageprice/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/marketpriceAverage.php";
    }
);
?>