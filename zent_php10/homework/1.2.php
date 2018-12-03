<!DOCTYPE html>
<html>
<head>
	<title>Tính tổng hiệu tích thương của 2 số</title>
	<meta charset="utf-8">
</head>
<body>

	<form method="post" action="">
		<table>
			<tr>
				<td>Nhập a: </td>
				<td><input type="text" name="a"></td>
			</tr>
			<tr>
				<td>Nhập b: </td>
				<td><input type="text" name="b"></td>
			</tr>
		</table>
		<input type="submit" name="calculate" value="Tính">
	</form>

	<?php
		$tong = '';
		$hieu = '';
		$tich = '';
		$thuong = '';
		$sodu = '';
		if (isset($_POST['calculate'])) 
		{
			// Bước 1: Lấy thông tin:
			$a = $_POST['a']; 
			$b = $_POST['b']; 
			//Bước 2: Tính toán: 
			if ($a == '') {
				echo "Bạn chưa nhập a";
			}else if ($b == '') {
				echo "Bạn chưa nhập b";
			}else if ($b == 0) {
				echo "Số b phải nhập khác 0";
			}else {
				$tong = $a + $b;
				$hieu = $a - $b;
				$tich = $a*$b;
				$thuong =$a / $b;
				$sodu = $a % $b;

			//Bước 3: in ra kết quả
				echo "<br>Kết Quả: ";
				echo "<br> Tổng: a + b= ".$tong;
				echo "<br> Hiệu: a - b= ".$hieu;
				echo "<br> Tích: a x b= ".$tich;
				echo "<br> Thương: a / b = ".$thuong;
				echo "<br> Số dư: a % b = ".$sodu;
			}

		}
	?>
</body>
</html>