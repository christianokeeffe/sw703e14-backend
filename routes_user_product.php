<?php
$f3->route('PUT /userproduct',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/user_productInsertView.php";
    }
);

$f3->route('POST /userproduct',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);
        include "view/user_productUpdateView.php";
    }
);
?>