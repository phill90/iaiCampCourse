<?php

$ch = curl_init('http://localhost/iaicamp/bramka.php?action=addProduct&name=czapka&cena=99.00');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

echo($result);die;