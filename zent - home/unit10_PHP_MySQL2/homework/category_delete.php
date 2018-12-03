<?php 
include_once("connection.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
		// cau lenh truy van
	$query = "DELETE FROM categories WHERE id = \"".$id."\"";
	
		// truy van vao database
	$result = $conn->query($query);

	if ($result) {
		setcookie('delete','Success!',time()+3);
		// header("location: product_manage.php");
	}else{
		setcookie('delete','Failed!',time()+3);
	}
	header("location: category_manage.php");
}else{
	header("location: category_manage.php");
}
?>