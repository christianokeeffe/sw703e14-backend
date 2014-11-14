<?php
require_once('simpletest/autorun.php');
require_once('../model/metadata/Auth.class.php');

class TestOfAuth extends UnitTestCase {

    function testAuthCreate() {
        $timeNow = time();
        $auth = new Auth(1, "publicKey", "sessionKey", strtotime($timeNow));
        $this->assertTrue($auth->id == 1);
        $this->assertTrue($auth->key == "publicKey");
        $this->assertTrue($auth->sessionKey == "sessionKey");
        $this->assertTrue($auth->expire == strtotime($timeNow));
    }
}
?>