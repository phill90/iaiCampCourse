<?php 

$products = array(
 1 => array('id' => 1, 'name' => 'towar1', 'cena' => '99 zl'),
 2 =>array('id' => 2, 'name' => 'towar2', 'cena' => '98 zl'),
 3 => array('id' => 3, 'name' => 'towar3', 'cena' => '97 zl'),
 4 =>array('id' => 4, 'name' => 'towar4', 'cena' => '96 zl'),
 5 =>array('id' => 5, 'name' => 'towar5', 'cena' => '95 zl'),
 6 =>array('id' => 6, 'name' => 'towar6', 'cena' => '94 zl'),
 7 =>array('id' => 7, 'name' => 'towar7', 'cena' => '93 zl'),
 8 =>array('id' => 8, 'name' => 'towar8', 'cena' => '92 zl'),
 9 =>array('id' => 9, 'name' => 'towar9', 'cena' => '91 zl')
 );
 
 switch ($_GET['action']) {
	 case 'checkProduct':
	 if ($products[$_GET['product']]) {
	 echo 'Jest towar' . '<br>';
	 }
	 break;
	 
	 case 'addProduct':
	 $products[$_GET['product']] = array('price' => $_GET['price'], 'nazwa' => $_GET['nazwa']);
	 break;
	 case 'removeProduct':
	 unset($products[$_GET['product']]);
	
	break;
 }
 
 
 var_dump($products);die;