<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
</head>
<body>	
	<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>

<h4>Constant</h4>
<?php
define("pi",3.14);
//define("hrs",8);
function Test(){
if(defined("pi"))
echo "<br>pi:=" . pi;
else
echo "<br>pi not defined";
if(defined("hrs"))
echo "<br>hrs:=" . hrs;
else
echo "<br>hrs not defined";
}
Test();
?>
</body>
</html>
