<!DOCTYPE html>
<html>
<head>
	<title>Tính giá trị trung bình của n phần tử mảng</title>
	<meta charset="utf-8">
</head>
<body>
	<h4>Tính giá trị trung bình của n phần tử mảng</h4>
	<form method="post" action="">
		<b>Nhập số phần tử mảng: n = </b><input type="number" name="n"> 
		<input type="submit" name="send" value="Send">
	</form>

	<?php 
		$sum = 0;
		$avg;
		if (isset($_POST['send'])) {
			$n=$_POST['n'];
			if ($n < 0) {
				echo "<br> <b>n phải là số nguyên dương!</b>";
			}else if ($n>=0) {
				$arr = array(0,0,0);
				echo "<form method='post' action=''>";
					for ($i=0; $i <$n ; $i++) { 
						echo " 	<fieldset>
								<br> Nhập giá trị của phẩn tử ".$i.": <input type='number' name='arr[$i]'>
									<input type='hidden' name='fset[]'/>
								</fieldset>";
								$sum=$sum + $arr[$i];
					}
				echo "</form>";
				echo " <pre>";
					print_r($arr);
				echo "</pre>";
				$avg = $sum/$n;
				echo "Giá trị trung bình các phần tử mảng đã nhập: Avg = ".$avg;
			}
		}
	 ?>
</body>
</html>