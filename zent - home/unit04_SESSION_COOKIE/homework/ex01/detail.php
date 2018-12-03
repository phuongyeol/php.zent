<?php 
	session_start();

	$id = $_GET['id'];
	if(!isset($id)){
		header('Location: list.php');
	}	
	$info = $_SESSION['student'][$id];		
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
		<a href="list.php" title="" class="btn btn-success">Back</a></br>
		<h3 class="text-uppercase text-center">Thông tin sinh viên: <?php echo $info['name'].'-'.$info['id'] ?></h3><br/>
		
		<table class="table table-hover">
			<tbody>
				<tr>
					<td>Mã số SV</td>
					<td><?php echo $info['id'] ?></td>
				</tr>
				<tr>
					<td>Họ và tên</td>
					<td><?php echo $info['name'] ?></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><?php echo $info['mobile'] ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $info['email'] ?></td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td><?php echo $info['gender'] ?></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><?php echo $info['country'] ?></td>
				</tr>
			</tbody>
		</table>
		
	</div>
</body>
</html>