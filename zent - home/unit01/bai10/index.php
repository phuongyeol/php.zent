<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Tổng của 10 số chẵn đầu tiên là</label>
	<div>		
		<?php 
			$i = 0;
			$sum = 0;
			while ( $i< 10) {
				$sum += 2*$i;
				$i++;
			}
			echo $sum;
		?>
	</div>
</body>
</html>