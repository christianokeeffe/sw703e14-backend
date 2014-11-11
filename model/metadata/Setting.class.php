<?php

class Setting {
    var $id;
    var $userID;
    var $prefname;
    var $value;

    function __construct($id, $userID, $prefname, $value)
    {
        $this->id = $id;
        $this->userID = $userID;
        $this->prefname = $prefname;
        $this->value = $value;
    }
} 