<?php
$f3->route('GET /task/@applianceid/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/taskView.php";
    }
);
?>