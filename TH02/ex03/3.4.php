<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
    <link rel="stylesheet" type="text/css" href="bai_4.css" />
</head>
<body>
<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>
<h4>Bang cuu chuong 2,3,4,5</h4>
<?php
$n = 2;
$S = "<table border=1 class=\"label\"> ";
$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
for($i=1; $i<=10; $i++)
{
 $S .="<tr><td> " .$n ."</td>";
 $S .="<td> " .$i ."</td>";
 $S .="<td> " .($n*$i) ."</td></tr>";
}
$S .= "</table>";
echo $S;
?>
<?php
$n = 3;
$S = "<table border=1 class=\"label\"> ";
$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
for($i=1; $i<=10; $i++)
{
 $S .="<tr><td> " .$n ."</td>";
 $S .="<td> " .$i ."</td>";
 $S .="<td> " .($n*$i) ."</td></tr>";
}
$S .= "</table>";
echo $S;
?>
<?php
$n = 4;
$S = "<table border=1 class=\"label\"> ";
$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
for($i=1; $i<=10; $i++)
{
 $S .="<tr><td> " .$n ."</td>";
 $S .="<td> " .$i ."</td>";
 $S .="<td> " .($n*$i) ."</td></tr>";
}
$S .= "</table>";
echo $S;
?>
<?php
$n = 5;
$S = "<table border=1 class=\"label\"> ";
$S .="<tr><td colspan=3> Bảng cửu chương  $n </td></tr>";
for($i=1; $i<=10; $i++)
{
 $S .="<tr><td> " .$n ."</td>";
 $S .="<td> " .$i ."</td>";
 $S .="<td> " .($n*$i) ."</td></tr>";
}
$S .= "</table>";
echo $S;
?>
</body>
</html>
