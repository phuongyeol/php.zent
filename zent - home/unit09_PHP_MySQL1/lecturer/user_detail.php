<?php 

	$id = $_GET['id'];
		// echo $id;

	include_once 'connection.php';
		//cau lenh truy van CSDL
	$query="SELECT * FROM lecturer_users WHERE id = $id";

		//thuc thi cau lenh truy van CSDL
	$result = $conn->query($query);

	$row = $result->fetch_assoc();
	echo "<pre>";
		print_r($row);
	echo "</pre>";

?>
