<?php
		
		$id_kh = $_POST['id_kh'];
		$ten_kh = $_POST['ten_kh'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db( "th07_qlbanhang",$link);

		$sql="update tb02_khachhang set `ten_kh`='".$ten_kh."', `dienthoai`='".$dienthoai."', `diachi`='".$diachi."' where `id_kh`='".$id_kh."'";
		$result = mysql_query($sql,$link);
		if($result) $affectrow = mysql_affected_rows();
		mysql_close($link);
		
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update</title>
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
			<h3>Do Update</h3>
			<tbody>
				<tr>
					<th >Số mẩu tin thêm vào:</th>
					<th >Mã khách hàng</th>
					<th >Tên khách hàng</th>
					<th >Số Điện thoại</th>
					<th >Địa chỉ</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $id_kh; ?></th>
						<th><?php echo $ten_kh;?></th>
						<th><?php echo $dienthoai;?></th>
						<th><?php echo $diachi;?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>