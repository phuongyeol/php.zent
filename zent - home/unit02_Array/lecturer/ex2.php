<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$names = array();
		//tạo mảng
		$names[] = 'Nghĩa';
		$names[] = 'Tùng';
		$names[] = 'Bách';
		$names[] = 'Thiện';
		$names[] = 'Duyên';

		$data = array(1,6,3,5,7);
		
		//mảng không tuần tự
		$info = array(
			'id' => "20151313",
			'name' => 'Tùng Bách',
			'gender' => 'Nam',
			'date_of_birth' => "06/03/1997",
			'country' => "HN",
			'email' => "anhngtrung@gmail.com",
			'mobile' => "0868603396",
			'subject' => array(
							"Java core",
							"Web front end",
							"PHP - Laravel",
							)
		);
	 ?>
</body>
</html>