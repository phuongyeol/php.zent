<!DOCTYPE html>
<html>
<head>
	<title>Nhập thông tin sinh viên</title>
	<meta charset="utf-8">
</head>
<body>
	
	<h3>Sinh viên nhập các thông tin sau: </h3>
	<form method="post" action="">
		<table>
			<tr>
				<td>1. Họ và tên: </td>
				<td><input type="text" name="name"></td>
			<tr>
				<td>2. Lớp: </td>
				<td><input type=text" name="class"></td>
			</tr>
			<tr>
				<td>3. Trường: </td>
				<td><input type="text" name="school"></td>
			</tr>
			<tr>
				<td>4. Giới tính: </td>
				<td><input type="text" name="sex"></td>
			</tr>
			<tr>
				<td>5. Ngày sinh: </td>
				<td><input type="text" name="birt"></td>
			</tr>
			<tr>
				<td>6. Quê Quán: </td>
				<td><input type="text" name="add"></td>
			</tr>
		</table>
		
		<input type="submit" name="send" value="SEND">
	</form>

	<?php 
		if (isset($_POST['send'])) {
			$name = $_POST['name'];
			$class = $_POST['class'];
			$school = $_POST['school'];
			$sex = $_POST['sex'];
			$birt = $_POST['birt'];
			$add = $_POST['add'];
			echo "
			<table>
				<tr><td>1. Họ và tên: </td><td>$name</td></tr>
				<tr><td>2. Lớp: </td><td>$class</td></tr>
				<tr><td>3. Trường: </td><td>$school</td></tr>
				<tr><td>4. Giới tính: </td><td>$sex</td></tr>
				<tr><td>5. Ngày sinh: </td><td>$birt</td></tr>
				<tr><td>6. Quê Quán: </td><td>add</td></tr>
			</table>";
		}
	?>

</body>
</html>