<?php
$f3->route('PUT /gamedata',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/gamedataView.php";
    }
);

$f3->route('GET /gamedata/@userID/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/getGamedata.php";
    }
);
?>