<!DOCTYPE html>
<html>
<head>
	<title>Tính Tổng</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Tính tổng: S4 = 1/1!+1/2!+1/3!+...+1/n! </h4>
	<form method="post" action="">
		<h4>Nhập số nguyên dương n: </h4>
		<input type="text" name="n">
		<input type="submit" name="tinh" value="Tính">
	</form>

	<?php 
		$fact = 1;
		$sum4 = 0;
		if (isset($_POST['tinh'])) {
			$n=$_POST['n'];
			if ($n <= 0) {
				echo "<br> <b>n phải là số nguyên dương!</b>";
			}else if ($n>0) {
				for ($i=1; $i <= $n ; $i++) { 
					$fact = $fact*$i;
					$sum4 = $sum4+1/$fact;
				}
				echo "<br> <h4>Kết quả: S4 = ".$sum4."</h4>";
			}
		}
	 ?>
</body>
</html>