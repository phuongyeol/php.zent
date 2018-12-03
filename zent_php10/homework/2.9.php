<meta charset="utf-8">
<?php 
	echo "BẢNG CỬU CHƯƠNG <br>";
	for ($i=0; $i <10 ; $i++) { 
		echo "<table><tr><th>"; 
			for ($j=1; $j < 10; $j++) { 
				echo "&emsp; $i x $j = ".($i*$j);
			}
		echo "</th></tr></table>";
	}

 ?>