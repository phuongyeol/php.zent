<meta charset="utf-8">
<?php 
    $arr= array(1,3,5,9,11);
    echo "<pre>";
        print_r($arr);
    echo "<pre>";
    echo "Mảng sau khi đảo chiều là:   ";
    for ($i=0; $i < count($arr) ; $i++) { 
        for ($j=$i+1; $j < count($arr); $j++) { 
            $tg=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$tg;
        }
        echo $arr[$i]."   ";
    }
?>