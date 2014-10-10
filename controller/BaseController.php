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
        $isvalid = $authController->auth($request);

        $this->makeResponse($isvalid, $request, $f3);
    }

    function beforerouteGET($f3) {
        $authController = new ApiAuth($f3);
        $session = $f3->get('PARAMS.session');
        $isvalid = $authController->isValidSession($session);

        $this->makeResponse($isvalid, $f3->get('REQUEST'), $f3);
    }

    function makeResponse($statusCode, $req, $f3)
    {
        switch ($statusCode) {
            case '0':
                header("HTTP/1.0 401 Unauthorized");
                echo "ERROR: 401 Unauthorized";
                if($f3->get('DEBUG') == 2)
                {
                    echo "<br />request:<br />";
                    var_dump($req);
                }
                die();
                break;
            case '419':
                header("HTTP/1.0 419 Expired");
                echo "ERROR: 419 Expired";
                if($f3->get('DEBUG') == 2)
                {
                    echo "<br />request:<br />";
                    var_dump($req);
                }
                die();
                break;
            case '400':
                header("HTTP/1.0 400 Bad Request");
                echo "ERROR: 400 Bad Request";
                die();
                break;
            default:
                header("HTTP/1.1 200 OK");
        }
    }
} 