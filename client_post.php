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

$ch = curl_init('http://127.0.0.1/sw703e14-backend/auth');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$content);

$result = curl_exec($ch);

//var_dump($result);

curl_close($ch);
$session = json_decode($result)->data;

$sessionKey = $session->session;

//---------------------------------------------------


require_once "model/metadata/UserProduct.class.php";

$user_product = new UserProduct(5, 10);

$request = json_encode(array(
    'user_product' => $user_product,
    'replaceID' => 9
));

$hash = hash_hmac('sha256', $request, $privateHash);

echo "client request hash: $hash<br />";

$content    = json_encode(array(
    'publicKey' => $publicHash,
    'request' => $request,
    'requestHash' => $hash,
    'session' => $sessionKey
));

$ch = curl_init('http://127.0.0.1/sw703e14-backend/userproduct');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POSTFIELDS,$content);


$output = curl_exec($ch);
curl_close($ch);

var_dump($output);

?>