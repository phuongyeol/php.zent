<?php 
	session_start();
	$id=$_GET['id'];
	if(!isset($id)){
		header('Location: list.php');
	}	
	unset($_SESSION['student'][$id]);
	setcookie('msg_delete','Xóa thành công',time()+2);
	header('Location: list.php');
?>