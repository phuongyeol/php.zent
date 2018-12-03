<?php
		$maMH = $_POST['maMH'];
		$tenMH = $_POST['tenMH'];
		$soTiet = $_POST['soTiet'];
		$affectrow=0;

		$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
		mysql_select_db("th05_qlsinhvien", $link);
		
		$sql="insert into tb3_monhoc(maMH,tenMH,soTiet) ";
		$sql .=" values('".$maMH."','".$tenMH."','".$soTiet."')";
		
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
					<th >Mã Môn học</th>
					<th >Tên môn học</th>
					<th >Số tiết</th>
				</tr>
			</tbody>
			<thread>
				<!-- Đưa dữ liệu vào từng dòng -->
					<tr>
						<th><?php echo $affectrow ?></th>
						<th><?php echo $maMH; ?></th>
						<th><?php echo $tenMH;?></th>
						<th><?php echo $soTiet;?></th>
					</tr>
			</thread>
		</table>
	</div>
</body>
</html>