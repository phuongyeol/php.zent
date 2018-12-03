<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Bài 3</label>
	<div>
		Tổng S = 1 +1/2 +1/3+....+1/13 là 
		<br/>
		<?php 
			$sum = 0;
			for ($i=1; $i < 14; $i++) { 
				$sum += 1/$i;
			}
			echo "S = $sum";
		 ?>
	</div>
</body>
</html>