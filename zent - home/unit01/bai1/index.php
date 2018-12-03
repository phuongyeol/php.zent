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
		In bảng Mã ASCII
	</div>
	<ul>
		<li>Sử dụng for <br/>
			<?php 
				for ($i=32; $i <=127; $i++) { 
					echo "$i".'-'.chr($i)."\t \t";
				}
			?>
		</li>
		<li>Sử dụng while <br/>
			<?php
				$i = 32;
				while($i<128){
					echo $i.'-'.chr($i)."\t \t";
					$i++;
				}
			?>
		</li>
		<li>Sử dụng do - while <br/>
			<?php 
				$i = 32;
				do{
					echo $i.'-'.chr($i)."\t \t";
					$i++;
				} while($i<=127)
			?>
		</li>
	</ul>
</body>
</html>