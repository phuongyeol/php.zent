<?php 
	session_start();

	$products = $_SESSION['product_list'];
	if (isset($_GET['id'])) {
			// echo $_GET['id'];
		$id = $_GET['id'];

		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['quantity']+=1;
				
		} else {
			// nên gán số lượng TRƯỚC sau đó mới add toàn bộ thông tin sản phẩm
			// $_SESSION['cart'][$id]=$products[$id];
			$_SESSION['cart'][$id]['quantity']=1;
			$_SESSION['cart'][$id]=$products[$id];
		}
	}
	setcookie('them','Them gio hang thanh cong', time()+3);

	header('Location: cart.php');
?>