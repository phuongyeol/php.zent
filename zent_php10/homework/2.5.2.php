<meta charset="utf-8">
<?php 
	echo"Tính giá trị trung bình của n phần tử của mảng:
	<br> arr={1,2,3,4,5,6,7,8,9,10}";
	$arr = array(1,2,3,4,5,6,7,8,9,10);
	$sum = 0;
	
	for ($i=0; $i <9 ; $i++) { 
		$sum = $sum + $arr[$i];
	}
	$avg = $sum/10;
	echo "<br> Kết Quả: S5=".$avg;
 ?>