<!DOCTYPE html>
<html>
<head>
	<title>Tính tổng</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Tính tổng: S1 = 1+2+3+...+n </h4>
	<form method="post" action="">
		<h4>Nhập số nguyên dương n: </h4>
		<input type="text" name="n">
		<input type="submit" name="tinh" value="Tính">
	</form>

	<?php 
	$sum = 0;
	if (isset($_POST['tinh'])) {
		$n=$_POST['n'];
		if ($n < 0) {
			echo "<br> n phải là số nguyên dương";
		}else if ($n>=0) {
			for ($i=0; $i <= $n ; $i++) { 
				$sum = $sum + $i;
			}
			echo "<br> <h4>Kết quả: S1= ".$sum."</h4>";
		}
	}
	 ?>
</body>
</html>