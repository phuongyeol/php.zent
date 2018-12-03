<?php
		$maSV = $_POST['maSV'];
		$maSV_del = $maSV;
		$affectrow=0;
		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db( "th05_qlsinhvien",$link);
		$sql="delete from tb2_sinhvien where maSV='".$maSV."'";
		$result = mysql_query($sql,$link);
		if($result) $affectrow = mysql_affected_rows();
		// echo $affectrow;
		mysql_close($link);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý sinh viên</title>
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
			<h3>Xóa dữ liệu với truy vấn DELETE</h3>
			<tbody>
				<tr>
					<td >Số mẩu tin đã xóa:</td>
					<td><?php echo $affectrow; ?></td>
				</tr>
				<tr>
					<td >Mã của sinh viên đã xóa:</td>
					<td><?php echo $maSV_del; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>