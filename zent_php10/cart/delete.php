<?php 
	session_start();
		// session_destroy();
	if (isset($_GET['code'])&&isset($_SESSION['cart'])) {
		$code=$_GET['code'];
		$cart =$_SESSION['cart'];


		if (str_word_count($code)>1) {
			$code=explode(" ",$code)[1];		
			unset($cart[$code]);

		} else if ($cart[$code]['quantity']==1){
			unset($cart[$code]);

		} else {
			$cart[$code]['quantity']--;
			
		}
		$_SESSION['cart']=$cart;
		header('Location: cart.php');

	} else {
		header('Location: index.php');
	}
?>