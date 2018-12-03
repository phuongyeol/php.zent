<?php 
	session_start();
	$products = array(
		'SP01' => array(
			'name' => 'Jean01',
			'color' => 'black',
			'quantity' => 100,
			'price' => 450000,
		),
		'SP02' => array(
			'name' => 'T-shirt 01',
			'color' => 'white',
			'quantity' => 100,
			'price' => 450000,
		),
		'SP03' => array(
			'name' => 'Box-Paint',
			'color' => 'black',
			'quantity' => 10,
			'price' => 680000,
		),
		'SP04' => array(
			'name' => 'Jean Jx',
			'color' => 'black',
			'quantity' => 20,
			'price' => 540000,
		),
	);

	$_SESSION['product_list']= $products;
?>
