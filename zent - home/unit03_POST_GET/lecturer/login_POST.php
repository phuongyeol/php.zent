<?php 
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == 'anhngtrung@gmail.com' && $password=='1234'){
			echo "Đăng nhập thành công";
		} else {
			echo "Đăng nhập thất bại";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<!-- POST: không hiển thị dữ liệu up lên server -->
		<form  method="post" accept-charset="utf-8" action="">
			<h3>Login</h3>
			<div class="form-group">
				<label for="">Email</label>
				<br/>
				<input type="text" name="email" value="" placeholder="Email" class="form-control">
			</div>
			<br/>
			<div class="form-group">
				<label for="">Password</label>
				<br/>
				<input type="password" name="password" value="" placeholder="password">
			</div>
			<br/>
			<!-- <input type="submit" name="submit" value="Login"> -->
			<button class="btn btn-primary" type="submit" name="submit">Login</button>
			<button class="btn btn-primary" type="reset" name="cancel">Cancel</button>
		</form>
	</div>	
</body>
</html>