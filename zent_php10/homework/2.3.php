<!DOCTYPE html>
<html>
<head>
	<title>Tính giai thừa</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Tính giai thừa: S3 = n! </h4>
	<form method="post" action="">
		<h4>Nhập số nguyên dương n: </h4>
		<input type="text" name="n">
		<input type="submit" name="tinh" value="Tính">
	</form>

	<?php 
		$fact = 1;
		if (isset($_POST['tinh'])) {
			$n=$_POST['n'];
			if ($n < 0) {
				echo "<br> <b>n phải là số nguyên dương!</b>";
			}else if ($n>=0) {
				for ($i=1; $i <= $n ; $i++) { 
					$fact = $fact*$i;
				}
				echo "<br> <h4>Kết quả: S2 = ".$fact."</h4>";
			}
		}
	 ?>
</body>
</html>