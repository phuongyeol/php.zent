<?php
	session_start();

	$id = $_GET['id'];
	if (isset($_SESSION['buy'])&&(count($_SESSION['buy'])!=0)) {
		# code...
		unset($_SESSION['buy'][$id]);
	}
	
	header('Location: cart.php');
?>