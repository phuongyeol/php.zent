<?php 
include_once("connection.php");
if(isset($_GET['code'])){
	$code = $_GET['code'];

	
		// cau lenh truy van
	$query = "DELETE FROM products WHERE code = \"".$code."\"";
	
		// truy van vao database
	$result = $conn->query($query);

	if ($result) {
		header("location: product_manage.php");
	}else{
		echo "Xoa thanh cong";
	}
}else{
	header("location: product_manage.php");
}
?>