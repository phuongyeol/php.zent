<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>::Welcome to PHP</title>
	<style type="text/css">
		#red
		{
			text-align: center;
			font-weight: bold;
			size: 30px;
			color: #E72B32;
		}
		#blue
		{
			text-align: left;
			font-style: italic;
			size: 30px;
			color: #599FD3;
		}
	</style>
</head>
<body>
	<div style="border: 1px solid #000000; font-family: Consolas;width: 250px; text-align: center"><b>Trần Thị Phương - 20156275</b></div>
	<p>    </p>
	<?php
	$i;
	for($i=1;$i<201;$i++)
	{
		if($i%2==0)
		{
			echo "<p id=\"red\">".$i."</p>";
		}
		else
		{
			echo "<p id=\"blue\">".$i."</p>";
		}
	}
	?>
</body>
</html>