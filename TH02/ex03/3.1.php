<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Welcome to PHP</title>
</head>
<body>
	<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>
	<h4>Variable</h4>
	<?php
	$var = 0;
	if (empty($var))
	 { //valuates true. Var’s value = 0
		echo "<br>1. Var is either 0 or not at all set";
	 }
	if (!isset($var))
	{ // evaluates false. isset($var) is true, !isset($var) is false.
		echo "<br>2. The Var is not set at all";
	}
	$var ="";
	if (empty($var)) 
	{ //evaluates true. Length of var’s value is 0.
		echo "<br>3.Var is either 0 or not at all set";
	}
	$var ="123";
	if (empty($var))
	{ //evaluates false
		echo "<br>4. Var is either 0 or not at all set";
	}
	unset($var);
	if (isset($var)==false) // !isset($var)
		echo "<br>5. Var is not set or unset().";
	else
		echo "<br>5. Var’value is $var";
	if (empty($var))
	echo "<br>6. Var is either 0 or not at all set";
	?>
	</body>
</html>
