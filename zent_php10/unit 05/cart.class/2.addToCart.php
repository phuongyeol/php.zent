<?php 
	// Tạo session:
	session_start();
	// Lấy code sp thông qua key của mảng:
		$code = $_GET['code'];
	// Lấy danh sách sp:
		$product = $_SESSION['products'][$code];

		// echo "<pre>";
		// 	print_r($product);
		// echo "</pre>";

	// đưa số lượng sản phẩm mua về 1:
		$product['QUANTITY'] = 1;
	// Tạo session giỏ hàng riêng: đưa sản phẩm vào session giỏ hàng có mã là $code
		$_SESSION['cart'][$code] = $product;

		// echo "<pre>";
		// 	print_r($_SESSION['cart']);
		// echo "</pre>";

	header('Location: 3.yourcart.php');
 ?>