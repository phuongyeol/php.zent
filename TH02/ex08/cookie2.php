<html>
<head>
	<title>Result Page</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>20156275 - TRẦN THỊ PHƯƠNG</h2>
	<?php
	if (isset($_COOKIE['phuongtran'])) {
		echo "Tên của bạn là <b>" . $_COOKIE['phuongtran']."</b>";
	}else{
		echo "<br> <h4>COOKIE['phuongtran'] đã hủy!<h4>";
	 }
	?>
	
</body>
</html>
