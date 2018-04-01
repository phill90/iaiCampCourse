<?php
$item = array('szynka', 'pieczarki', 'jajka');

$data = json_encode($item);
$ch = curl_init('http://localhost/iaicamp/productslist');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
$productsList = json_decode($response, 1);