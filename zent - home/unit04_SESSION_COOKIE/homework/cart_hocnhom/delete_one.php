<?php 
	session_start();
	if (isset($_GET['id'])) {
			// echo $_GET['id'];
		$id = $_GET['id'];
		if (isset($_SESSION['cart'][$id])&&$_SESSION['cart'][$id]['quantity']>1) {
			$_SESSION['cart'][$id]['quantity']-=1;
		} else {
			unset($_SESSION['cart'][$id]);
		}		
	}
	setcookie('xoa','Xoas gio hang thanh cong', time()+3);

	header('Location: cart.php');
?>