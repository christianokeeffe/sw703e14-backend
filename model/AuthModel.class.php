<?php
require_once "/model/metadata/Auth.class.php";

class AuthModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function validate($key)
    {
        $result = $this->db->exec("SELECT * FROM auth WHERE sessionkey =  '$key'");

        foreach($result as $row)
        {
            $auth = new Auth($row["id"], $row["key"], $row["expire"]);

            $currentTime = time();

            if(($currentTime - strtotime($auth->expire)) <= 30)
            {
                return $auth->key;
            }
        }
        return null;
    }

    function createSession($api_key)
    {
        $this->cleanOldSessions($api_key);
        $session_key = hash_hmac('sha256', rand(10000, 99999), $api_key);
        $this->db->exec("INSERT INTO auth (`key`, sessionkey) VALUES ('$api_key', '$session_key')");
        return $session_key;
    }

    function cleanOldSessions($public)
    {
        $this->db->exec("DELETE FROM auth WHERE `key` = '$public'");
    }
} 