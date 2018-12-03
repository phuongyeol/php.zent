<?php
		$id_nv = $_POST['id_nv'];
		$ten_nv = $_POST['ten_nv'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("nvong ket noi duoc MySQL Database");
		mysql_select_db("th07_qlbanhang", $link);
		
		$sql="insert into tb03_nhanvien (id_nv,ten_nv,dienthoai,diachi) ";
		$sql .=" values('".$id_nv."','".$ten_nv."','".$dienthoai."','".$diachi."')";
		
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
			<tbody>
				<tr>
					<th >Số mẩu tin thêm vào:</th>
					<th >Mã nhân viên</th>
					<th >Tên nhân viên</th>
					<th >Số điện thoại</th>
					<th >Địa chỉ</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $id_nv; ?></th>
						<th><?php echo $ten_nv;?></th>
						<th><?php echo $dienthoai;?></th>
						<th><?php echo $diachi;?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>