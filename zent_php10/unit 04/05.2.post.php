<meta charset="utf-8">
<?php 
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";
?>

 <!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="" method="POST">
		Email<input type="text" name="email"><br>
		Pass<input type="password" name="pass"><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>