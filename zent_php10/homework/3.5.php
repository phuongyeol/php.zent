<meta charset="utf-8">
<?php 
	$info="Phương YeolYeol";
	echo $info."<br>";
	$info1=trim($info);
	$arr=substr($info1, 0 , 1);
	echo "Ký tự đầu: ".$arr;
	$arr1=substr($info1, strlen($info1)-1 , 1);
	echo "<br>Ký tự cuối: ".$arr1;
 ?>