<? 
	session_start(); 
?>
<html>
<head>
	<title>Result Page</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>20156275 - TRẦN THỊ PHƯƠNG</h2>
	<?php 
	if (isset($_SESSION['name'])) {
		echo "Tên của bạn là <b>".$_SESSION['name']."</b>"; 
	}else{
		echo " SESSION này không tồn tại";
	}	
	?>
	
</body>
</html>

