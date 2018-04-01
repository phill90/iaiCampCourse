<?php 

$options = array(
'uri' => 'http://localhost',
'location' => 'http://localhost/iaicamp/soap_server.php',
'trace' => 1);

$client = new SoapClient(NULL, $options);
echo $client->getInitials('Cezary', 'Dziekonski');
-