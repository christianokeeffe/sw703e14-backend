<?php

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

$ch = curl_init('http://127.0.0.1/backend/auth');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$content);

$result = curl_exec($ch);

//var_dump($result);

curl_close($ch);
$session = json_decode($result)->data;

$sessionKey = $session->session;

//---------------------------------------------------


require_once "model/metadata/User.class.php";

$user = new User(0, "testUser", "testPass", "testFirstName", "testLastName", "test@mail.dk");

        $request = json_encode(array(
            'user' => $user
        ));

$hash = hash_hmac('sha256', $request, $privateHash);

echo "client request hash: $hash<br />";

$content    = json_encode(array(
    'publicKey' => $publicHash,
    'request' => $request,
    'requestHash' => $hash,
    'session' => $sessionKey
));

$ch = curl_init('http://127.0.0.1/backend/user/');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch,CURLOPT_POSTFIELDS,$content);


$output = curl_exec($ch);
curl_close($ch);

var_dump($output);

?>