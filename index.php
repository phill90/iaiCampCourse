<?php 

$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		$parameters = $_GET; 
		$products = array();// pobrac z bazy na podstawie $pathArray i $parameters
	break;
	case 'PUT':
	case 'POST':
		$parameters = json_decode(file_get_contents('php://input'), 1);
		// zaktualizować dane
		$products = array();// pobrac z bazy po aktualizacji
	break;
	case 'DELETE':
	// usunąć konkretny zasób na podstawie $pathArray 
	$products = array();  // pobrać z bazy po usunięciu
	default:
	$parameters = array();
}

echo json_encode($products);