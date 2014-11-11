<?php
$f3->route('GET /optionalTask/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/optionalTaskView.php";
    }
);
?>