<meta charset="utf-8">
<?php 
	$x=0;
	$sum = 0;
	$count= 0;
	while($count<=10){
		if ($x%2== 0) {
			$sum = $sum +$x;
			$count=$count+1;

		}
		$x=$x+1;
	}
	echo "Tổng 10 số chẵn đầu tiên: S8 = ".$sum;
 ?>