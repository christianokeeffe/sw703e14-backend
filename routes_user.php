<?php
$f3->route('PUT /user',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/usersInsertView.php";
    }
);

$f3->route('GET /user/@username/@password',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforerouteGET($f3);
        include "view/usersGetUser.php";
    }
);
?>