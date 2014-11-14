<?php
$f3->route('GET /settings/@userID/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/settingsGetView.php";
    }
);

/*
$f3->route('POST /setting',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/settingSetView.php";
    }
);
*/
?>