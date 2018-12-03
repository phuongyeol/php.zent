<meta charset="utf-8">
<?php 
	$info="Trần Thị Phương";
	echo "Chuỗi đầu vào: ".$info;
	$arr=explode(" ", $info);
	$ten = array_pop($arr);
	$ho = array_shift($arr);
	$dem = implode(" ",$arr);	

	echo " <br> Chuỗi sau khi được tách:<br>";
	echo "Họ :".$ho;
	echo "<br>";
	echo "Đệm :".$dem;
	echo "<br>";
	echo "Tên :".$ten;
?>