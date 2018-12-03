<?php 
include_once 'connection.php';
$id = $_GET['id'];
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$updated_at = date('Y-m-d H:i:s');
	$query= "UPDATE lecturer_users SET name='".$name."',mobile= '".$mobile."',email='".$email."', updated_at='".$updated_at."' WHERE id=".$id;
	
	$result= $conn->query($query);
	
	if ($result) {
		setcookie('update','success!',time()+3);
	} else {
		setcookie('update','failed',time()+3);
	}
	header('location: users.php');
} else {
	$query = "SELECT * FROM lecturer_users WHERE id = ".$id;
	$result = $conn->query($query);
	$row= $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>UPDATE USER</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3>Cap nhat thong tin nguoi dung</h3>
		<form action="" method="POST" role="form">			

			<input type="hidden" class="form-control" id="id" name="id" placeholder=""  value="<?php echo $row['id'] ?>">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php echo $row['name'] ?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="" value="<?php echo $row['email'] ?>">
			</div>
			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile" name="mobile" placeholder="" value="<?php echo $row['mobile'] ?>">
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
</body>
</html>