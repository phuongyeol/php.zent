<?php
		$maSV = $_POST['maSV'];
		$userName = $_POST['userName'];
		$passWord = $_POST['passWord'];
		$hoSV = $_POST['hoSV'];
		$tenSV = $_POST['tenSV'];
		$gioiTinh = $_POST['gioiTinh'];
		$ngaySinh = $_POST['ngaySinh'];
		$noiSinh = $_POST['noiSinh'];
		$diaChi = $_POST['diaChi'];
		$maKH = $_POST['maKH'];
		$hocBong = $_POST['hocBong'];
		
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db("th05_qlsinhvien", $link);
		
		$sql="insert into tb2_sinhvien(maSV,userName,passWord,hoSV,tenSV,gioiTinh,ngaySinh,noiSinh,diaChi,maKH,hocBong) ";
		$sql .=" values('".$maSV."','".$userName."','".$passWord."','".$hoSV."','".$tenSV."','".$gioiTinh."','".$ngaySinh."','".$noiSinh."','".$diaChi."','".$maKH."','".$hocBong."')";
		
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
			<legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
			<h3>Do-Insert</h3>
			<tbody>
				<tr>
					<th >Số mẩu tin thêm vào:</th>
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
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $maSV; ?></th>
						<th><?php echo $userName;?></th>
						<th><?php echo $passWord;?></th>
						<th><?php echo $hoSV;?></th>
						<th><?php echo $tenSV;?></th>
						<th><?php if ($gioiTinh == 1){echo "Nữ";}else{echo "Nam";};?></th>
						<th><?php echo $ngaySinh;?></th>
						<th><?php echo $noiSinh;?></th>
						<th><?php echo $diaChi;?></th>
						<th><?php echo $maKH;?></th>
						<th><?php echo $hocBong;?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>