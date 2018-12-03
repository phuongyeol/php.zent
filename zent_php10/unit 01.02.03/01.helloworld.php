<?php
	echo "Hello World! <br> ";
	echo "Hello ZentGroup <br>";

	// Câu lệnh if-else if:
	$day = "Sunday";
	 if ($day=="Friday") {
		echo "Hom nay la Thu Sau";
	}else if ($day == "Monday") {
		echo "Hom nay la Thu Hai";
	}else{
		echo "Ngay trong tuan";
	}
	echo "<br> Today is ".$day;

	// Khai báo biến 
	$name = "ZonZon "; 
	$slogan = "Just do it ";
	echo "<br> $name $slogan"; // dùng nháy kép, biến được hiểu 
	echo '<br> $name $slogan'; // dùng nháy đơn, biến ko được hiểu

	// Khai báo hằng: 
	define('ZonZon', '0973653820')

?>