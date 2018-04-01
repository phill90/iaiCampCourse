<?php 

$options = array(
'uri' => 'http://localhost',
'location' => 'http://localhost/iaicamp/soap_server.php',
'trace' => 1);

$client = new SoapClient(NULL, $options);
$functions = $client->__getFunctions();

echo $client->getInitials('Cezary', 'Dziekonski');
