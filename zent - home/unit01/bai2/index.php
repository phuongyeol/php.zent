<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Bai2</label>
	<div>
		Tổng của 13 số nguyên dương đầu tiên là:
		<?php 
			$sum = 0;
			for ($i=1; $i < 13; $i++) { 
				$sum+=$i;
			} 
			echo $sum;
		?>
	</div>
</body>
</html>