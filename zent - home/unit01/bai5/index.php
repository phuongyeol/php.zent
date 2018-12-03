<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		Bài 5
	</div>
	<div>
		S = 1/1! + 2/2! +3/3! +....+13/13! =
		<?php 
			$giaithua = 1;
			$sum = 0;
			for ($i=1; $i < 14; $i++) { 
				$giaithua *= $i;
				$sum += $i/$giaithua;
			}
			echo $sum;
		?>
	</div>
</body>
</html>