<?php
require_once('simpletest/autorun.php');


class HelperFunctions extends UnitTestCase {

    var $path = "http://127.0.0.1/backend";

    private function getSessionKey(){
        $publicHash = 'a2105103cd48b1a8601486fc52d8bb43a1156a49b2f36f1d28ed177d0203ba99';
        $privateHash = 'c90adb0a3a6f0865062a639f5ad54f113f559031a658d503903ec48ced13078f';

        $request = json_encode(array(
            'language' => 'da'
        ));

        $hash = hash_hmac('sha256', $request, $privateHash);

        $content    = json_encode(array(
            'publicKey' => $publicHash,
            'request' => $request,
            'requestHash' => $hash
        ));

        $ch = curl_init("$this->path/auth");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$content);

        $result = curl_exec($ch);

        curl_close($ch);
        $session = json_decode($result)->data;

        return $session->session;
    }

    function callGet($params)
    {
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $this->path . $params . $this->getSessionKey());

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);

        return json_decode($output);
    }
}
?>