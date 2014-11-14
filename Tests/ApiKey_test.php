<?php
require_once('simpletest/autorun.php');
require_once('../model/metadata/ApiKey.class.php');

class TestOfApiKey extends UnitTestCase {

    function testApiKeyCreate() {
        $apiKey = new ApiKey(1, "publicKey", "privateKey");
        $this->assertTrue($apiKey->id == 1);
        $this->assertTrue($apiKey->public == "publicKey");
        $this->assertTrue($apiKey->private == "privateKey");
    }
}
?>