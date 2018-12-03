<meta charset="utf-8">
<?php 
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";
	//Kiểm tra có tồn tại khóa 'course' dùng isset:
	if (isset($_GET['course'])) {
		echo "<br> Khóa học: ".$_GET['course'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="" method="GET">
		Email<input type="text" name="email"><br>
		Pass<input type="password" name="pass"><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>