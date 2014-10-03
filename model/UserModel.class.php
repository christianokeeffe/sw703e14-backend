<?php
require_once "metadata/User.class.php";

class UserModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function getUserById($id)
    {
        $result = $this->db->exec("SELECT * FROM users WHERE id =  $id") or die("Error in the consult.." . mysqli_error($this->db));

        if(count($result) <= 0)
        {
            return null;
        }
        return new User($result[0]["id"], $result[0]["username"], $result[0]["password"], $result[0]["firstname"], $result[0]["lastname"], $result[0]["email"]);
    }

    function getUserByEmail($email)
    {
        $result = $this->db->exec("SELECT * FROM users WHERE email =  '$email'");

        if(count($result) <= 0)
        {
            return null;
        }

        return new User($result[0]["id"], $result[0]["username"], $result[0]["password"], $result[0]["firstname"], $result[0]["lastname"], $result[0]["email"]);
    }

    function getUserByUsername($username)
    {
        $result = $this->db->exec("SELECT * FROM users WHERE username =  $username") or die("Error in the consult.." . mysqli_error($this->db));

        if(count($result) <= 0)
        {
            return null;
        }

        return new User($result[0]["id"], $result[0]["username"], $result[0]["password"], $result[0]["firstname"], $result[0]["lastname"], $result[0]["email"]);
    }

    function insertUser($user)
    {
        $this->db->exec("INSERT INTO users (username, password, firstname, lastname, email) VALUES ('$user->username', '$user->password', '$user->firstname', '$user->lastname', '$user->email')");

        return $this->getUserByEmail($user->email);
    }

    function validateInputs($user)
    {
        if($this->getUserByEmail($user->email) != null)
        {
            return false;
        }
        return true;
    }

    function authUser($username, $password)
    {
        $db_user = $this->getUserByEmail($username);

        if($db_user == null)
        {
            $db_user = $this->getUserByUsername($username);
        }

        if($db_user->password == $password)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}