<meta charset="utf-8">
<?php 
	$arr=array(2,3,8,1,7,9,6,12,15,13);
	echo "Mảng đầu vào:";
	echo "<pre>";
		print_r($arr);
	echo "<pre>";
	$c=0;
	$d=0;
	for ($i=0; $i < count($arr) ; $i++) { 
		if ($arr[$i]%2==0) {
			$chan[$c]=$arr[$i];
			$c++;
		}
		else{
			$le[$d]=$arr[$i];
			$d++;
		}
	}
	echo "<br> Mảng chẵn :";
	for ($i=0; $i < $c ; $i++) { 
		echo $chan[$i]."  ";
	}
	echo "<br> Mảng lẻ :";
	for ($i=0; $i < $d; $i++) { 
		echo $le[$i]."  ";
	}
?>