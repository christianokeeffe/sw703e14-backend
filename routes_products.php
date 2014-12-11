<?php
$f3->route('GET /products/@userID/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/productsView.php";
    }
);
?>