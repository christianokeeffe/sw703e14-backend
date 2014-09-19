<?php
require_once "/model/ApiKeyModel.class.php";
class ApiAuth {
    var $db;

    function __construct($db_link)
    {
        $this->db = $db_link;
    }

    function auth($public_key, $request_body, $contentHash)
    {
        $apiKeyModel = new ApiKeyModel($this->db);

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
} 