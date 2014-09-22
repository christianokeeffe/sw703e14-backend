<?php
require_once "ApiAuthNew.class.php";

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

    function beforeroute($f3) {
        $authController = new ApiAuth($this->db);


        $request = $f3->get('HEADERS');


        if(!isset($request["X-Public"]) || !isset($request["X-Hash"]))
        {
            if($f3->get('DEBUG') == 2)
            {
                echo "request:<br />";
                var_dump($request);
                echo "<br />";
            }
            header("HTTP/1.0 400 Bad Request");
            echo "ERROR: 400 Bad Request";
            die();
        }

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