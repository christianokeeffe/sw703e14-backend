<?php
$publicHash = 'a2105103cd48b1a8601486fc52d8bb43a1156a49b2f36f1d28ed177d0203ba99';
$privateHash = 'c90adb0a3a6f0865062a639f5ad54f113f559031a658d503903ec48ced13078f';
$content    = json_encode(array(
    'language' => 'en'
));

$hash = hash_hmac('sha256', $content, $privateHash);

$headers = array(
    'X-Public: '.$publicHash,
    'X-Hash: '.$hash
);

$ch = curl_init('http://127.0.0.1/appliances');
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$content);




$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>