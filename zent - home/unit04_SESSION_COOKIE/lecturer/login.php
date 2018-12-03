<?php 

	session_start();
	if (isset($_SESSION['login']) && $_SESSION['login']==true) {
		# code...
		header('Location: admin.php');
	}
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		if($email == 'anhngtrung@gmail.com' && $password=='123456'){
			$_SESSION['login']=true;
			header('Location: admin.php');

		} else {	
				// không muốn gán false thì kiểm tra tồn tại session

			$_SESSION['login']=false;			
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
		<form action="" method="POST" role="form" name="form">
			<legend>Login</legend>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="email">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="" placeholder="Input field" name="password">
			</div>		
		
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>	
</body>
</html>