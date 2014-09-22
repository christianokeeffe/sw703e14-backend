<?php
require_once "/model/ApiKeyModel.class.php";
class ApiAuth {
    var $db;

    function __construct($db_link)
    {
        $this->db = $db_link;
    }

    function auth($request)
    {
        $apiKeyModel = new ApiKeyModel($this->db);

        $request = json_decode($request);

        $public_key = $request->publicKey;
        $request_body = $request->request;
        $contentHash = $request->requestHash;


        $apiKey = $apiKeyModel->getApiKey($public_key);

        $hash = hash_hmac('sha256', $request_body, $apiKey->private);


        if ($hash == $contentHash){
            return true;
        }
        else
        {
            return false;
        }
    }

    function generateSessionKey($api_key)
    {
        return hash_hmac('sha256', $api_key, $api_key);
    }

    function provideSession()
    {

    }
} 