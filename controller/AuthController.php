<?php
require_once "./model/ApiKeyModel.class.php";
require_once "./model/AuthModel.class.php";
class ApiAuth extends BaseController {

    function auth($request, $session_required = true)
    {
        $apiKeyModel = new ApiKeyModel($this->db);

        $arr_request = json_decode($request, true);

        if(!isset($arr_request["publicKey"]) || !isset($arr_request["request"]) || !isset($arr_request["requestHash"]))
        {
            return 400;
        }

        $public_key = $arr_request["publicKey"];
        $request_body = $arr_request["request"];
        $contentHash = $arr_request["requestHash"];

        if($session_required)
        {
            if(!isset($arr_request["session"]))
            {
                return 0;
            }

            $session = $arr_request["session"];
            $public_key = $this->isValidSession($session);

            if($public_key == 419)
            {
                return 419;
            }
        }

        $apiKey = $apiKeyModel->getApiKey($public_key);

        $hash = hash_hmac('sha256', $request_body, $apiKey->private);

        if ($hash == $contentHash)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    function isValidSession($sessionKey)
    {
        $authModel = new AuthModel($this->db);
        $public_key = $authModel->validate($sessionKey);

        if($public_key == null)
        {
            return 0;
        }
        else if($public_key == 419)
        {
            return 419;
        }
        else
        {
            return $public_key;
        }
    }

    function provideSession($api_key)
    {
        $authModel = new AuthModel($this->db);
        return $authModel->createSession($api_key);
    }
} 