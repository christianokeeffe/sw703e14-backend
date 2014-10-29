<?php
$f3->route('GET /dailyTask/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3); 
        include "view/dailyTaskView.php";
    }
);
?>