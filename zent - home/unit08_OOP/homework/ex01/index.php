<?php 
	require 'Person.php';
	include 'Student.php';
	$anh = new Student();
	$anh->name="Anh Nguyen Trung";
	$anh->date_of_birth="06.03.1997";
	$anh->country="Hanoi";
	$anh->gender="Male";
	$anh->id="20150120";
	$anh->class="CNTT2.01";
	$anh->school="Hanoi University of Science and Technology";
	$anh->phone="084868603396";
	$anh->email="anhngtrung@gmail.com";	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OOP_1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<?php 
			$anh->printInfo();
		?>
	</div>
	
</body>
</html>