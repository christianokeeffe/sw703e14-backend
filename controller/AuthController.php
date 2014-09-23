<?php
require_once "/model/ApiKeyModel.class.php";
require_once "/model/AuthModel.class.php";
class ApiAuth extends BaseController {

    function auth($request, $session_required = true)
    {
        $apiKeyModel = new ApiKeyModel($this->db);

        $arr_request = json_decode($request, true);

        if(!isset($arr_request["publicKey"]) || !isset($arr_request["request"]) || !isset($arr_request["requestHash"]))
        {
            return false;
        }

        $public_key = $arr_request["publicKey"];
        $request_body = $arr_request["request"];
        $contentHash = $arr_request["requestHash"];

        if($session_required)
        {
            if(!isset($arr_request["session"]))
            {
                return false;
            }
            $session = $arr_request["session"];
            $authModel = new AuthModel($this->db);
            $public_key = $authModel->validate($session);
        }


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

    function provideSession($api_key)
    {
        $authModel = new AuthModel($this->db);
        return $authModel->createSession($api_key);
    }
} 