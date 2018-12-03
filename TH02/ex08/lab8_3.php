<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>
<body>
    <h3 align="center">20156275 - TRẦN THỊ PHƯƠNG</h3>
	
	<?php 
	session_start();
	//huy cac bien session
	unset($_SESSION["maSV"]); unset($_SESSION["tenSV"]);
	?>
	<script language="javascript">
	    window.open("Lab8.php","_self");
	</script>
</body>
</html>
<?php ob_flush(); ?>
