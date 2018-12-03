<?php 
include_once("connection.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];

	
		// cau lenh truy van
	$query = "DELETE FROM news WHERE id = \"".$id."\"";
	
		// truy van vao database
	$result = $conn->query($query);

	if ($result) {
		header("location: ad_post_manage.php");
	}else{
		echo "Xoa thanh cong";
	}
}else{
	header("location: ad_post_manage.php");
}
?>