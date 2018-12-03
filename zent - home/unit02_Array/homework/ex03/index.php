<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Tách họ đệm tên:</label>
	<?php 
		$name = "   Phạm Tùng Bách   ";
		echo $name."<br/>";

		$name1 = trim($name);
		$full = explode(" ", $name1);
		$count = count($full) - 1;
		
		echo "Tên: ".$full["$count"]."<br/>";
		echo "Họ: ".$full[0]."<br/>";
		echo "Đệm: ";
		foreach ($full as $key => $value) {
			if($key==0 ||$key == ($count) || $value == " "){

			} else {
				echo $value."&nbsp;";
			}
		}
	?>
</body>
</html>