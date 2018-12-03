<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
</head>
<body>
<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>		<h4>SWITCH Statement</h4>
<?php
$j=3;
$j=date("w");
$str="";
switch($j) {
case 0:
$str="Today is Sunday";
break;
case 1:
$str="Today is Monday";
break;
case 2:
$str="Today is Tueday";
break;
case 3:
$str="Today is Wednesday";
break;
case 4:
$str="Today is Thursday";
break;
case 5:
$str="Today is Friday";
break;
case 6:
$str="Today is Saturday";
break;
default:
$str="Today is Sunday";
break;
}
echo $str;
?>
</body>
</html>
