<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php 
	//Ket noi co so du lieu
	include_once('connection_funct.php');
	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM tb1_khoa";
	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);
 ?>
</head>
<body>
	<div class="container">
		<table class="table table-hover">
			<legend> 20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Thông tin các khoa:</h3>
			<thread>
				<tr>
					<th >Mã Khoa</th>
					<th >Tên Khoa</th>
				</tr>
			</thread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php while($row = $result->fetch_assoc()) {  ?>
					<tr>
						<th><?php echo $row['maKH']; ?></th>
						<th><?php echo $row['tenKH'];?></th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>