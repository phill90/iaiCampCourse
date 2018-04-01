<?php 
//adres https://www.iai-shop.com/pl/shop/api/?action=method&function=checkserverload&method=checkServerLoad
$wsdl = 'http://trening6.iai-shop.com/api/?gate=checkserverload/checkServerLoad/39/soap/wsdl&lang=pol';


$address = 'http://trening6.iai-shop.com/api/?gate=checkserverload/checkServerLoad/6/soap';
$wsdl = $address . '/wsdl';
$binding = array();
$binding['location'] = $address;
$binding['trace'] = true;
$client = new SoapClient($wsdl, $binding);

$login = 'phpwebcamp';
$pass = 'iaiphpcamp';

$request = array();
$request['checkServerLoad'] = array();
$request['checkServerLoad']['authenticate'] = array();
$request['checkServerLoad']['authenticate']['system_key'] = sha1(date("Ymd") . sha1($pass));
$request['checkServerLoad']['authenticate']['system_login'] = $login;

$response = $client->__call('checkServerLoad', $request);