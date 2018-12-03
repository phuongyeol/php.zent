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

		//in mảng - <pre> -> định dạng
		// echo "<pre>";
		// 	print_r($names);
		// echo "</pre>";

		// in mang dùng foreach
		// foreach ($names as $name) {
		// 	echo $name."<br/>";
		// }

		// echo "<br/>".$names[2];
		
		//tạo mảng biết trước số pt
		$data = array(1,6,3,5,7);

		//gán thêm 1 pt vào mảng
		$data[]=13;
		$data[]=13;

		// echo "<pre>";
		// 	print_r($data);
		// echo "</pre>";
		
		
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
		//in mảng 
		// echo "<pre>";
		// 	print_r($info);
		// echo "</pre>";

		echo "<br> <br> Thong tin sinh vien ";
		echo "<br> <br> ID: ".$info['id'];
		echo "<br> <br> Name: ".$info['name'];
		echo "<br> <br> Date of birth: ".$info['date_of_birth'];
		echo "<br> <br> Email: ".$info['email'];
		echo "<br> <br> Mobile: ".$info['mobile'];
		echo "<br> <br> Subject: ".$info['subject'][0].", ".$info['subject'][1].", ".$info['subject'][2];		

		echo "<br/>";
		$info1 = array(
			'subject' => array(
							'class1'=>'web',
							'class2'=>'php',
							'class3'=>'Java',
			),
		);

		echo "INFO1: subject: ".$info1['subject']['class3'];
	?>
</body>
</html>