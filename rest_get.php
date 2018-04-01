<?php

$ch =curl_init('http://localhost/iaicamp/productslist');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
$productsList = json_decode($response, 1);
var_dump($productsList);die;