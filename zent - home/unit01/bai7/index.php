<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Vẽ hình 2</label>
	<div>
		<?php for ($i=13; $i >=1; $i--){
			for ($j=1; $j <=$i ; $j++){
				echo '#  ';
			}
			echo "<br/>";
		} ?>
	</div>
</body>
</html>