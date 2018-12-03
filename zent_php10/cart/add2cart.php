<?php 
	session_start();
	// session_destroy();
	$product_list=$_SESSION['product_list'];
	if (isset($_GET['code'])) {
		$code =$_GET['code'];
		$cart=$_SESSION['cart'];

		if (!isset($_SESSION['cart'])||!isset($_SESSION['cart'][$code])) {

			$cart[$code]=$product_list[$code];
			$cart[$code]['quantity']=1;

		} else {
			$cart[$code]['quantity']++;
		}
		
		$_SESSION['cart']=$cart;
		header('Location: cart.php');	
	} else {
		header('Location: index.php');
	}
?>