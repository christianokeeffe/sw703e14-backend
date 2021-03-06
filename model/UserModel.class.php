<?php
require_once "metadata/User.class.php";

class UserModel {
    var $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    function cryptPassword($clearPass)
    {
        return password_hash($clearPass, PASSWORD_BCRYPT);
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
        $result = $this->db->exec("SELECT * FROM users WHERE username =  '$username'");

        if(count($result) <= 0)
        {
            return null;
        }

        return new User($result[0]["id"], $result[0]["username"], $result[0]["password"], $result[0]["firstname"], $result[0]["lastname"], $result[0]["email"]);
    }

    function insertUser($user)
    {
        //$user->password = $this->cryptPassword($user->password);
        $this->db->exec("INSERT INTO users (username, password, firstname, lastname, email) VALUES ('$user->username', '$user->password', '$user->firstname', '$user->lastname', '$user->email')");
        $newuser = $this->getUserByEmail($user->email);
        $this->db->exec("INSERT INTO user_appliances (userID, applianceID) VALUES ($newuser->id,1),($newuser->id,2),($newuser->id,3),($newuser->id,4),($newuser->id,5),($newuser->id,6),($newuser->id,7),($newuser->id,8)");
        $this->db->exec("INSERT INTO gamedata (userID, date, savings, score, dishes, cleanClothes, hygiene, wetClothes, carBattery, billValue) VALUES ('$newuser->id', 1409565600, 0, 0, 100, 100, 100, 0, 100, 0)");
        return $this->getUserByEmail($user->email);
    }

    function validateInputs($user)
    {
        if($this->getUserByEmail($user->email) != null || $this->getUserByUsername($user->username) != null)
        {
            return false;
        }
        return true;
    }

    function authUser($username, $password)
    {
        //$password = $this->cryptPassword($password);

        $db_user = $this->getUserByEmail($username);

        if($db_user == null)
        {
            $db_user = $this->getUserByUsername($username);
        }

        if($db_user == null)
        {
            return null;
        }
        elseif($db_user->password == $password)
        {
            return $db_user;
        }
        else
        {
            return null;
        }
    }
}