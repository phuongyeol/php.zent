<?php
		
		$id_sp = $_POST['id_sp'];
		$ten_sp = $_POST['ten_sp'];
		$dongia = $_POST['dongia'];
		
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db( "th07_qlbanhang",$link);

		$sql="update tb01_sanpham set `ten_sp`='".$ten_sp."', `dongia`='".$dongia."' where `id_sp`='".$id_sp."'";
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
					<th >Mã sản phẩm</th>
					<th >Tên sản phẩm</th>
					<th >Đơn giá</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $id_sp; ?></th>
						<th><?php echo $ten_sp;?></th>
						<th><?php echo $dongia;?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>