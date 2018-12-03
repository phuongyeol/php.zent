<meta charset="utf-8">
<?php 
	$arr=array(2,4,6,1,7,4,8);
	echo "<pre>";
		print_r($arr);
	echo "<pre>";
	$k=3;
	for ($j=$i=0; $i <count($arr) ; $i++) { 
		if ($i != $k) {
			$arr[$j]=$arr[$i];
			$j++;
		}
	}
	echo "Mảng sau khi xóa phần tử ở vị trí thứ ".$k." là:<br>  ";
	for ($i=0; $i < $j ; $i++) { 
		echo $arr[$i]."    ";
	}
?>
