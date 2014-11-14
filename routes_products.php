<?php
$f3->route('PUT /products',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/productInsertView.php";
    }
);

$f3->route('GET /products/@userID/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/productGetView.php";
    }
);

$f3->route('GET /products/@lang/@session',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/productGetView.php";
    }
);

?>