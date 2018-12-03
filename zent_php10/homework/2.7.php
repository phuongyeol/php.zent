<meta charset="utf-8">
<?php 
	$count = 0;
	$arr = array();
	for ($i=1; $i<=100 ; $i++) { 
		$x = $i;
		if (($x % 3 == 0) || ($x % 7 == 0) ) {
			$count = $count +1;
			$arr[] = $x;
		}

	}
	echo "<br> Có $count số nguyên chia hết cho 3 hoặc 7 nằm trong đoạn 1 đến 100: ";
	foreach ($arr as $value ) {
		echo "&emsp; $value";
	}
 ?>