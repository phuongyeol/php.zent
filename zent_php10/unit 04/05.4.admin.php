<?php
   session_start();
   if ($_SESSION['isLogin'] == 1) {
   		echo "Admin!!";
   }else{
   		header('Location: 05.3.login.php');
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