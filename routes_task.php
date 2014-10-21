<?php
$f3->route('GET /task/@applianceid/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/taskView.php";
    }
);

$f3->route('GET /task/@applianceid/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/taskView.php";
    }
);

$f3->route('GET /tasks/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/tasksView.php";
    }
);

$f3->route('GET /tasks/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/tasksView.php";
    }
);
?>