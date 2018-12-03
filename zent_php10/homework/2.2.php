<!DOCTYPE html>
<html>
<head>
	<title>Tính tổng</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Tính tổng: S2 = 1+1/2+1/3+...+1/n </h4>
	<form method="post" action="">
		<h4>Nhập số nguyên dương n: </h4>
		<input type="text" name="n">
		<input type="submit" name="tinh" value="Tính">
	</form>

	<?php 
		$sum = 0;
		if (isset($_POST['tinh'])) {
			$n=$_POST['n'];
			if ($n <= 0) {
				echo "<br> n phải là số nguyên và lớn hơn 0!";
			}else if ($n>0) {
				for ($i=1; $i <= $n ; $i++) { 
					$sum = $sum + 1/$i;
				}
				echo "<br> <h4>Kết quả: S2 = ".$sum."</h4>";
			}
		}
	 ?>
</body>
</html>