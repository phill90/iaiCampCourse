<?php
$boczek = '30g';
$data = json_encode($boczek);
$ch =curl_init('http://localhost/iaicamp/productslist/boczek');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
$productsList = json_decode($response, 1);