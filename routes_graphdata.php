<?php
$f3->route('PUT /graphdata',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/graphdataInsertView.php";
    }
);

$f3->route('GET /graphdata/@userID/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/graphdataGetView.php";
    }
);
?>