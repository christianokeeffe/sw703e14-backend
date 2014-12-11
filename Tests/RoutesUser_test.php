<?php
require_once("HelperFunctions.php");

class TestOfUserRoutes extends HelperFunctions {

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }

    function testGetUser() {
        $response = parent::callGet("/user/dude/1234/en/");

        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }


    function testPutUser() {

        require_once "../model/metadata/User.class.php";

        $user = new User(0, $this->generateRandomString(), $this->generateRandomString(), $this->generateRandomString(), $this->generateRandomString(), $this->generateRandomString() . "@mailawda.dk");

        $request = json_encode($user);

        $response = parent::callPut("/user", $request);


        $this->assertTrue($response->status == 200);
        $this->assertTrue(count($response->data) > 0);
    }

}
?>