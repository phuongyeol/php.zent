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
	$query = "SELECT * FROM tb2_sinhvien";
	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);
 ?>
</head>
<body>
	<div class="container">
		<table class="table table-hover">
			<legend> 20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Thông tin các sinh viên:</h3>
			<thread>
				<tr>
					<th >Mã SV</th>
					<th >Username</th>
					<th >Password</th>
					<th >Họ SV</th>
					<th >Tên SV</th>
					<th >Giới Tính</th>
					<th >Ngày Sinh</th>
					<th >Nơi sinh</th>
					<th >Địa Chỉ</th>
					<th >Mã Khoa</th>
					<th >Học Bổng</th>
				</tr>
			</thread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php while($row = $result->fetch_assoc()) {  ?>
					<tr>
						<th><?php echo $row['maSV']; ?></th>
						<th><?php echo $row['userName'];?></th>
						<th><?php echo $row['passWord'];?></th>
						<th><?php echo $row['hoSV'];?></th>
						<th><?php echo $row['tenSV'];?></th>
						<th><?php if ($row['gioiTinh'] == 1){echo "Nữ";}else{echo "Nam";};?></th>
						<th><?php echo $row['ngaySinh'];?></th>
						<th><?php echo $row['noiSinh'];?></th>
						<th><?php echo $row['diaChi'];?></th>
						<th><?php echo $row['maKH'];?></th>
						<th><?php echo $row['hocBong'];?></th>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>