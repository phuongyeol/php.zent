<meta charset="utf-8">
<?php 
	// Danh sách sinh viên:
	session_start();
	// Lấy toàn bộ danh sách ra mảng:
	$student = $_SESSION['student'];

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
	<div class="container">
	<h3 class="text-uppercase text-center">STUDENT LIST</h3>
		<table class="table table-hover">
			<thread>
				<tr>
					<th class="text-center">MSSV</th>
					<th class="text-center">NAME</th>
					<th class="text-center">PHONE</th>
					<th class="text-center">EMAIL</th>
					<th class="text-center">ACTION</th>
				</tr>
			</thread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php foreach ($student as $student) { ?>
					<tr>
						<th><?php echo $student['mssv']; ?></th>
						<th><?php echo $student['name']; ?></th>
						<th><?php echo $student['phone']; ?></th>
						<th><?php echo $student['email']; ?></th>
						<th> 
							<a href="edit.php?mssv=<?php echo $student['mssv']; ?>" class="btn btn-info">Edit</a> 
							<a href="detail.php?mssv=<?php echo $student['mssv']; ?>" class="btn btn-primary">Detail</a> 
							<a href="delete.php?mssv=<?php echo $student['mssv']; ?>" class="btn btn-danger">Delete</a></th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		
		<div class="text-center">
			<a href="add.php" class="btn btn-success">ADD MORE</a>
		</div>
	</div>
</body>
</html>