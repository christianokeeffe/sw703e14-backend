<?php
require_once "/controller/ApiAuth.class.php";
//! Base controller
class Controller {

	//! HTTP route pre-processor
	function beforeroute($f3) {
        include "dbconnect.php";
        $authController = new ApiAuth($link);


        $request = $f3->get('HEADERS');
        $publicHash  = $request["X-Public"];
        $contentHash = $request["X-Hash"];

        $content     = $f3->get('BODY');

        if ($authController->auth($publicHash, $content, $contentHash))
        {
            header("HTTP/1.1 200 OK");
        }
        else
        {
            header("HTTP/1.0 401 Unauthorized");
            echo "ERROR: 401 Unauthorized";
            die();
        }
	}

}
