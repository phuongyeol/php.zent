<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Bai9: </label>
	<div>
		<?php for ($i=13; $i >=1 ; $i--) { 
			for ($j=0; $j < $i; $j++) { 
				echo "&nbsp;&nbsp;";
			}
			for ($k=$i; $k < 13; $k++) { 
				echo '#';
			}
			echo "<br/>";
		} ?>
	</div>
</body>
</html>