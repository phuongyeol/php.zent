<?php 
include_once("connection.php");
if(isset($_GET['code'])){
	$code = $_GET['code'];
	
		// cau lenh truy van
	$query = "DELETE FROM products WHERE code = \"".$code."\"";
	
		// truy van vao database
	$result = $conn->query($query);

	if ($result) {
		setcookie('delete','Success!',time()+3);
		// header("location: product_manage.php");
	}else{
		setcookie('delete','Failed!',time()+3);
	}
	header("location: product_manage.php");
}else{
	header("location: product_manage.php");
}
?>