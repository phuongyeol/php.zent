<?php 
	session_start();
	if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1 ) {
		header('Location: 05.4.admin.php');
	}
	if (isset($_POST['user'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if ($user == 'admin' && $pass == '123') {
			$_SESSION['isLogin'] = true;
			header('Location: 05.4.admin.php');
		}else{
			$_SESSION['isLogin'] = false;
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="POST">
		Tên đăng nhập <input type="text" name="user"><br>
		Pass <input type="password" name="pass"><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>