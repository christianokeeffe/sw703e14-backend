<?php
$f3->route('PUT /gamedata',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/gamedataInsertView.php";
    }
);

$f3->route('GET /gamedata/@userID/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/gamedataGetView.php";
    }
);
?>