<meta charset="utf-8">
<?php 
	$arr=array('1','5','2','3','4','11');
    echo "<pre>";
        print_r($arr);
    echo "<pre>";
    echo "Mảng sau khi sắp xếp là:   ";
    for ($i=0; $i < count($arr) ; $i++) { 
        for ($j=$i+1; $j < count($arr); $j++) { 
            if ($arr[$i]>$arr[$j]) {
            	$tg=$arr[$i];
            	$arr[$i]=$arr[$j];
            	$arr[$j]=$tg;
            }
        }
        echo $arr[$i]."   ";
    }
 ?>