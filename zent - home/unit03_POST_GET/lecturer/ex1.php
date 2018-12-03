<?php 
	// echo "<pre>";
	// 	print_r($_GET);
	// echo "<pre>";

	// if(isset($_GET['class'])){
	// 	echo "Class: ".$_GET['class']."<br/>";
	// };
	// if(isset($_GET['lecturer'])){
	// 	echo "lecturer: ".$_GET['lecturer']."<br/>";
	// }
	

	$mod = '';
	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	switch ($mod) {
		case 'user':
			echo "<br> Chuc nang quan ly nguoi dung";
			break;
		case 'customer':
			echo "<br> Chuc nang quan ly khach hang";
			break;
		case 'product':
			echo "<br> Chuc nang quan ly san pham";
			break;
		default:
			echo "<br> Ban chua chon chuc nang nao";
			break;
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul>
		<li><a href="ex1.php?mod=user" title="">Quan ly nguoi dung</a></li>
		<li><a href="ex1.php?mod=customer" title="">Quan ly khach hang</a></li>
		<li><a href="ex1.php?mod=product" title="">Quan ly san pham</a></li>

	</ul>
</body>
</html>