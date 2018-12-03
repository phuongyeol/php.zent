<?php 
	
	// Kết nối CSDL:
	include_once('connection_funct.php');

	$id = $_GET['id'];
	// Cau lenh truy van co so du lieu: 
	$query = "SELECT * FROM news WHERE id = ".$id;

	// Thuc thi cau lenh truy van co so du lieu:
	$result = $conn->query($query);
	// while($row = $result->fetch_assoc()) { 
 	// 	echo "<pre>";
	// 			print_r($row);
	// 	echo "</pre>";
				  	   	 
 	//}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>DETAIL NEW</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="">
 	<meta http-equiv="X_UA_Compatible" content="IE=edge">
 </head>
 <body>
 	<?php while($row = $result->fetch_assoc()) {  ?>
	 	<h2> Title: <?php echo $row ['title']?></h2>
	 	<h5>Short_Content:<?php echo $row['short_content']?></h5>
	 	<img src="<?= $result['image']?>" alt="">
	 	<p align="right"> Viết bởi <?php echo $row['author']?></p>
 	<?php } ?>
 </body>
 </html>