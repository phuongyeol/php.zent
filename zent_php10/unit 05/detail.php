<meta charset="utf-8">
<?php 
	session_start();
	// Bước 1: Lấy dữ liệu khóa chính chuyển sang
		$mssv = $_GET['mssv'];
		// echo $mssv;
	// Bước 2: Lấy thông tin của khóa chính
		$student = $_SESSION['student'][$mssv];
		// echo "<pre>";
		// 	print_r($student);
		// echo "</pre>";

 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="modal-body">

			<table class="table table-hover modal-content">
				<h3 class="text-center">Thông tin sinh viên</h3>
				<tbody>
					<tr>
						<td><label for="">Code</label></td>
						<td><?php echo $student['mssv'] ?></td>
					</tr>
					<tr>
						<td><label for="">Name</label></td>
						<td><?php echo $student['name'] ?></td>
					</tr>
					<tr>
						<td><label for="">Phone</label></td>
						<td><?php echo $student['phone'] ?></td>
					</tr>
					<tr>
						<td><label for="">Email</label></td>
						<td><?php echo $student['email'] ?></td>
					</tr>
					<tr>
						<td><label for="">Sex</label></td>
						<td><?php echo $student['sex'] ?></td>
					</tr>
					<tr>
						<td><label for="">Address</label></td>
						<td><?php echo $student['addr'] ?></td>
					</tr>

				</tbody>
			</table>
		<div class="text-center">
			<a href="list.php" class="btn btn-default"><h4>Close</h4></a></th>
		</div>
		
	</div>

</body>
</html>