<?php 
	//Ket noi co so du lieu
	include_once('connection_funct.php');
	// Cau lenh truy van co so du lieu: 
	$query = "SELECT * FROM news";

	// Thuc thi cau lenh truy van co so du lieu:
	$result = $conn->query($query);
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<h3 class="text-uppercase text-center">NEWS LIST</h3>
		<table class="table table-hover">
			<thread>
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">TITLE</th>
					<th class="text-center">CONTENT</th>
					<th class="text-center">ACTION</th>
				</tr>
			</thread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php while($row = $result->fetch_assoc()) {  ?>
					<tr>
						<th><?php echo $row['id']; ?></th>
						<th><?php echo $row['title'];?></th>
						<th><?php echo $row['content']; ?></th>
						<th> 
							<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a> 
							<a href="detail_new.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Detail</a> 
							<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		
		<div class="text-center">
			<a href="" class="btn btn-success">ADD MORE</a>
		</div>
	</div>
</body>
</html>