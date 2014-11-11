<?php
$f3->route('POST /user_appliance',
    function($f3) {
        $auth = new BaseController($f3);
        $auth->beforeroutePOST($f3);

        include "view/users_applianceUpdateView.php";
    }
);
?>