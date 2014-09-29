<?php
class User {
    var $id;
    var $username;
    var $password;
    var $firstname;
    var $lastname;
    var $email;

    function __construct($id, $username, $password, $firstname, $lastname, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

?>