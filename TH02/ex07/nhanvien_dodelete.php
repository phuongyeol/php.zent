<?php
		$id_nv = $_POST['id_nv'];
		$id_nv_del = $id_nv;
		$affectrow=0;
		$link = mysql_connect ("localhost", "root", "root") or die("nvong ket noi duoc MySQL Database");
		mysql_select_db( "th07_qlbanhang",$link);
		$sql="delete from tb03_nhanvien where id_nv='".$id_nv."'";
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
	<title>DoDelete</title>
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
			<h3>Do Delete</h3>
			<tbody>
				<tr>
					<td >Số mẩu tin đã xóa:</td>
					<td><?php echo $affectrow; ?></td>
				</tr>
				<tr>
					<td >Mã của nhân viên đã xóa:</td>
					<td><?php echo $id_nv_del; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>