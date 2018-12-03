<?php 
	session_start();
	// id sản phẩm muốn mua
	$id = $_GET['id'];
			
	if(!isset($id)||!isset($_SESSION['buy'])){
		header('Location: products.php');
	}
	//lấy thông tin sp muốn mua 
	$item_selected = $_SESSION['products'][$id];
	$buy = $_SESSION['buy'];
	
	//trường hợp mua thêm sản phẩm trong danh sách mua
	if(array_key_exists($id, $_SESSION['buy'])){
		$buy[$id]['quantity']=$buy[$id]['quantity']+1;
		$buy[$id]['thanh_tien']=$buy[$id]['quantity']*$buy[$id]['price'];			
	} else {
		//mua sản phẩm chưa có trong giỏ
		$item_selected['quantity']=1;
		$item_selected['thanh_tien']=$item_selected['quantity']*$item_selected['price'];
		$buy[$id]=$item_selected;
	}
	$_SESSION['buy']=$buy;
	
	header('Location: cart.php');
?>