<?php

class ApiKey {
    var $id;
    var $public;
    var $private = "";

    function __construct($id, $public, $private)
    {
        $this->id = $id;
        $this->public = $public;
        $this->private = $private;
    }
} 