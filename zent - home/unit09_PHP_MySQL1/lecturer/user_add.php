<?php 

	if (isset($_POST['submit'])) {

		include_once 'connection.php';

		//B1: lay du lieu tu nguoi dung
		$name = $_POST['name'];	
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = md5($_POST['password']);
		$created_at = date('Y-m-d H:i:s');

		// B2: Chuan bi cau truy van
		$query = "INSERT INTO lecturer_users(name,email,mobile,password, created_at, status)
				 VALUES ('".$name."','".$email."','".$mobile."','".$password."','".$created_at."',1)";
				 
		// B3: Thuc thi truy van
		$result = $conn->query($query);

		// B4: Chuyen trang
		header('Location: users.php');
	}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADD USER</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3>Them moi</h3>
		<form action="" method="POST" role="form">
			

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="text" class="form-control" id="password" name="password" placeholder="Input field">
			</div>			

			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>