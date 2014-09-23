<?php
class Auth {
    var $id;
    var $key;
    var $sessionKey;
    var $expire;

    function __construct($id, $key, $sessionKey, $expire)
    {
        $this->id = $id;
        $this->key = $key;
        $this->sessionKey = $sessionKey;
        $this->expire = $expire;
    }
} 