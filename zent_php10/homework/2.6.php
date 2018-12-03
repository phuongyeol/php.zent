<meta charset="utf-8">
<?php 
	echo "&emsp; Đếm số lần suất hiện của số x trong mảng sau: 
		<br> &emsp; <b>arr = {0,1,2,3,4,5,6,7,8,9,9,9}</b>";
	$arr = array(0,1,2,3,4,5,6,7,8,9,9,9);
	$x=9;
	$count = 0;
	for ($i=0; $i <12 ; $i++) { 
		if ($arr[$i] == $x) {
			$count = $count+1;
		}
	}
	echo "<br> &emsp; Số x = $x suất hiện $count lần!";
 ?>