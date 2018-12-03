<!DOCTYPE html>
<html>
<head>
	<title>So sánh hai số</title>
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
		<input type="submit" name="calculate" value="So Sánh">
	</form>

	<?php
		if (isset($_POST['calculate'])) 
		{
			$a = $_POST['a']; 
			$b = $_POST['b']; 
			if ($a == '') {
				echo "<br> <h3>Bạn chưa nhập a</h3>";
			}else if ($b == '') {
				echo "<br> <h3>Bạn chưa nhập b</h3>";
			}else if ($a > $b) {
				echo "<br> <h3>$a là số lớn hơn</h3>";
			}else if ($a < $b){
				echo "<br> <h3>$b là số lớn hơn</h3>";
			}else{
				echo "<br> <h3>Hai số bằng nhau!</h3>";
			}

		}
	?>
</body>
</html>