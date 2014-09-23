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
            $auth = new Auth($row["id"], $row["key"], $row["sessionkey"], $row["expire"]);

            $currentTime = time();

            //sessions are valid 15 minutes
            if(($currentTime - strtotime($auth->expire)) <= 900)
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
        $created_session = $this->getSession($session_key);
        return $created_session;
    }

    function getSession($sessionKey)
    {
        $result = $this->db->exec("SELECT * FROM auth WHERE sessionkey =  '$sessionKey'");
        return new Auth($result[0]["id"], $result[0]["key"], $result[0]["sessionkey"], $result[0]["expire"]);
    }

    function cleanOldSessions($public)
    {
        $this->db->exec("DELETE FROM auth WHERE `key` = '$public'");
    }
} 