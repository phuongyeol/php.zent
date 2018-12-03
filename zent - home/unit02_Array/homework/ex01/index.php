<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<label for="">Thông tin sinh viên</label>
	<?php 
		$info = array(
			'name' => 'Nguyễn Trung Anh',
			'class' => 'PHP 09',
			'school' => 'Trường đời',
			'gender' => 'Nam',
			'date_of_birth' => '06/03/1997',
			'country'=> 'HN',
		);

		echo "<br> <br> Họ và tên: ".$info['name'];
		echo "<br> <br> Lớp: ".$info['class'];
		echo "<br> <br> Trường: ".$info['school'];
		echo "<br> <br> Giới tính: ".$info['gender'];
		echo "<br> <br> Ngày sinh: ".$info['date_of_birth'];
		echo "<br> <br> Quê quán: ".$info['country'];
	?>

</body>
</html>