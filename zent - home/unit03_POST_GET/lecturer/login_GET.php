<?php 
	if(isset($_GET['submit'])){
		$email = $_GET['email'];
		$password = $_GET['password'];

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
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<!-- GET: hiển thị dữ liệu up lên server -->
		<form  method="get" accept-charset="utf-8" action="">
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