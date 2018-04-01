<?php

$ch = curl_init('http://localhost/iaicamp/bramka_json.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

//$response =json_decode($result);
$response =json_decode($result, true);
var_dump($response);die;