<?php
class ServiceFunctions
{
	public function getInitials($first_name, $last_name)
	{
		$name = '';
		$name .= strtoupper(substr($first_name, 0, 1));
		$name .= ' ' . strtoupper(substr($last_name, 0, 1)); 
		return $name;
	}
}

$options = array('uri' => 'http://localhost/');
$server = new SoapServer(NULL, $options);
$server->setClass('ServiceFunctions');
$server->handle();