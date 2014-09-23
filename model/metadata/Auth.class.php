<?php
class Auth {
    var $id;
    var $key;
    var $expire;

    function __construct($id, $key, $expire)
    {
        $this->id = $id;
        $this->key = $key;
        $this->expire = $expire;
    }
} 