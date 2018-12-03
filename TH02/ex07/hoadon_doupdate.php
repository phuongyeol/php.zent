<?php
		
		$id_hd = $_POST['id_hd'];
		$ngaylap_hd = $_POST['ngaylap_hd'];
		$id_kh = $_POST['id_kh'];
		$id_nv = $_POST['id_nv'];
		$ngaygiaohang = $_POST['ngaygiaohang'];
		$tongtien = $_POST['tongtien'];
		
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("nvong ket noi duoc MySQL Database");
		mysql_select_db( "th07_qlbanhang",$link);

		$sql="update tb04_hoadon set `ngaylap_hd`='".$ngaylap_hd."', `id_kh`='".$id_kh."', `id_nv`='".$id_nv."', `ngaygiaohang`='".$ngaygiaohang."', `tongtien`='".$tongtien."' where `id_hd`='".$id_hd."'";
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
					<th >Mã hóa đơn</th>
					<th >Ngày lập hóa đơn</th>
					<th >Mã Khách hàng</th>
					<th >Mã nhân viên</th>
					<th>Ngày giao hàng</th>
					<th>Tổng tiền:</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $id_hd; ?></th>
						<th><?php echo $ngaylap_hd;?></th>
						<th><?php echo $id_kh;?></th>
						<th><?php echo $id_nv;?></th>
						<th><?php echo $ngaygiaohang; ?></th>
						<th><?php echo $tongtien; ?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>