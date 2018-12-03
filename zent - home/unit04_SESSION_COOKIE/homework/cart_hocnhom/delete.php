<?php 
	session_start();
	if (isset($_GET['id'])) {
			// echo $_GET['id'];
		$id = $_GET['id'];
		if (isset($_SESSION['cart'][$id])) {
			unset($_SESSION['cart'][$id]);
		}		
	}
	setcookie('xoa','Xoas gio hang thanh cong', time()+3);

	header('Location: cart.php');
?>