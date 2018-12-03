<?php
		$maCB = $_POST['maCB'];
		$userName = $_POST['userName'];
		$passWord = $_POST['passWord'];
		$hoCB = $_POST['hoCB'];
		$tenCB = $_POST['tenCB'];
		$gioiTinh = $_POST['gioiTinh'];
		$ngaySinh = $_POST['ngaySinh'];
		$noiSinh = $_POST['noiSinh'];
		$diaChi = $_POST['diaChi'];
		$maVien = $_POST['maVien'];
		$chucDanh = $_POST['chucDanh'];
		$soDienthoai = $_POST['soDienthoai'];
		$email = $_POST['email'];
		// Thử dùng session
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db("th06_qlcanbo", $link);
		
		$sql="INSERT INTO tb2_canbo(maCB,userName,passWord, hoCB, tenCB, gioiTinh, ngaySinh, noiSinh, diaChi, maVien, chucDanh, soDienthoai,email ) ";
		$sql .=" values('".$maCB."','".$userName."','".$passWord."','".$hoCB."','".$tenCB."','".$gioiTinh."','".$ngaySinh."','".$noiSinh."','".$diaChi."','".$maVien."','".$chucDanh."','".$soDienthoai."','".$email."')";
		// echo $sql;

		$result = mysql_query($sql,$link);
		if($result) $affectrow = mysql_affected_rows();
		mysql_close($link);
?>
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
</head>
<body>
	<div class="container">
		<table class="table table-border">
			<legend>Thông tin cán bộ mới </legend>
			<tbody>
				<tr>
					<th>Mã Cán Bộ</th>
					<th>Username</th>
					<th>Password</th>
					<th>Họ Cán Bộ</th>
					<th>Tên Cán Bộ</th>
					<th>Giới Tính</th>
					<th>Ngày Sinh</th>
					<th>Nơi Sinh</th>
					<th>Địa Chỉ</th>
					<th>Mã Viện</th>
					<th>Chức danh</th>
					<th>Số điện thoại</th>
					<th>Email:</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $maCB; ?></th>
						<th><?php echo $userName;?></th>
						<th><?php echo $passWord; ?></th>
						<th><?php echo $hoCB;?></th>
						<th><?php echo $tenCB; ?></th>
						<th><?php echo $gioiTinh;?></th>
						<th><?php echo $ngaySinh; ?></th>
						<th><?php echo $noiSinh;?></th>
						<th><?php echo $diaChi; ?></th>
						<th><?php echo $maVien;?></th>
						<th><?php echo $chucDanh; ?></th>
						<th><?php echo $soDienthoai;?></th>
						<th><?php echo $email;?></th>

					</tr>
			</thread>
			<tr><th><a href="ad.update.php">UPDATE</a></th></tr>
		</table>
	</div>
</body>
</html>