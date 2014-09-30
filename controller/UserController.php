<?php
require_once "./model/UserModel.class.php";
require_once "BaseController.php";

class UserController extends BaseController {

    function getUserById($id)
    {
        $userModel = new UserModel($this->db);
        return $userModel->getUserById($id);
    }

    function getUserByEmail($email)
    {
        $userModel = new UserModel($this->db);
        return $userModel->getUserByEmail($email);
    }

    function insertUser($user)
    {
        $userModel = new UserModel($this->db);

        $valid = $userModel->validateInputs($user);

        if($valid != null)
        {
            return $userModel->insertUser($user);
        }
        else
        {
            return null;
        }
    }

    function authUser($username, $password)
    {
        $userModel = new UserModel($this->db);
        return $userModel->authUser($username, $password);
    }
} 