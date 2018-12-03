<?php 
	session_start();
	// session_register('name'); 
	$_SESSION['name'] = 'Phương Trần'; 
?>
<html>
<head>
	<title>Test page 1</title>
	<meta charset='utf-8'>
</head>
<body>
	<h2>20156275 - TRẦN THỊ PHƯƠNG</h2>
	<b><a href=session2.php>Click here</a></b>
</body>
</html>
