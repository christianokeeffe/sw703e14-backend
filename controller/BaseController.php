<?php
require_once "AuthController.php";

class BaseController {
    protected $db;
    protected $f3;

    //! Instantiate class
    function __construct($f3) {
        $this->f3 = $f3;
        $this->db=new DB\SQL(
            'mysql:host=localhost;port=3306;dbname=' . $f3->get('db'),
            $f3->get('dbuser'),
            $f3->get('dbpass')
        );
    }

    function beforeroutePOST($f3) {

        $authController = new ApiAuth($f3);

        $request = $f3->get('BODY');

        if ($authController->auth($request))
        {
            header("HTTP/1.1 200 OK");
        }
        else
        {
            if($f3->get('DEBUG') == 2)
            {
                echo "request: ";
                var_dump($request);
                echo "<br />";
            }
            header("HTTP/1.0 401 Unauthorized");
            echo "ERROR: 401 Unauthorized";
            die();
        }

    }

    function beforerouteGET($f3) {

        $authController = new ApiAuth($f3);

        $session = $f3->get('PARAMS.session');

        if ($authController->isValidSession($session))
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