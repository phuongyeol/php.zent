<?php 
	session_start();
	// session_destroy();
	if(!isset($_POST['id'])){
		header('Location: list.php');
	} else {
		$sv = array(
			'id' => $_POST['id'],
			'name' => $_POST['name'],
			'mobile' => $_POST['mobile'],
			'email' => $_POST['email'],
			'country' => $_POST['country'],
			'gender' => $_POST['gender'],
		);
		
		$_SESSION['student'][$_POST['id']]=$sv;

		$_SESSION['added']='true';
		setcookie('msg','Thêm mới thành công',time()+2);
		header('Location: list.php');	
	}

?>
