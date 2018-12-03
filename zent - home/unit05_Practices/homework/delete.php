<?php 
	session_start();
		// session_destroy();

	if (isset($_GET['code'])&&isset($_SESSION['cart'])) {
		$code=$_GET['code'];
		$cart =$_SESSION['cart'];

		//delete all: code = all ID_SP;
		if (str_word_count($code)>1) {
			$code=explode(" ",$code)[1];		
			unset($cart[$code]);
			setcookie('delete','Xóa sản phẩm thành công',time()+3);

		//số lượng =1, xóa khỏi danh sách luôn
		} else if ($cart[$code]['quantity']==1){
			unset($cart[$code]);

		// số lượng >1, giảm số lượng
		} else {
			$cart[$code]['quantity']--;
			
		}
		$_SESSION['cart']=$cart;
		header('Location: cart.php');

	} else {
		header('Location: index.php');
	}
?>