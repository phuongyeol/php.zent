<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
</head>
<body>
	<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>
	<h4>Scope of Variable</h4>
	<?php
	$a = 100;
	/* global scope */
	function Test()
	{
	global $a;
	$i = 10;
	$a += 10;
	echo "<br>a:= $a";
	echo "<br>i:= $i";
	/* reference to local scope variable */
	}
	Test();
	echo "<br>a:= $a";
	$i=1000;
	echo "<br>i:= $i";
	?>
</body>
</html>
