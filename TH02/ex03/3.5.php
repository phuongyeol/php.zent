<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
    <link rel="stylesheet" type= "text/css" href="table.css" />
</head>
<body>
<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>
<h4>Table of books</h4>
<?php
$S = "<table border=1>";
$S .="<tr><td> STT </td>";
$S .="<td> Tên sách </td>";
$S .="<td> Nội dung sách </td></tr>";
for($i=1; $i<=100; $i++)
{
 $S .="<tr><td>" .$i ."</td>";
 $S .="<td> Tên sách " .$i ."</td>";
 $S .="<td> Nội dung sách " . $i ."</td></tr>";
}
$S .= "</table>";
echo $S;
?>
</body>
</html>
