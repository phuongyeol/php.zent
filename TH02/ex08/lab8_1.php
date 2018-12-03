<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
    session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

	<h3 align="center">20156275 - TRẦN THỊ PHƯƠNG</h3>
	
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td width="300" height="37"  align="center" valign="middle" bgcolor="#FFFFCC" style="font-size:18px; color:#FF0000 ">
		    <?php
		    if(isset($_SESSION["tenSV"]))
		            {
		                echo "Xin chào: ".$_SESSION["tenSV"];
		                echo "<br>";
		                echo "<a href='lab8_3.php'>Đăng xuất</a>";
		            }   
		    else    {
		                echo "Bạn đã đăng xuất";
		                echo "<br>";
		                echo "<a href='lab8.php'>Đăng nhập</a>";
		            }
		    ?>
		    </td>
		</tr>
		<tr>
			<td height="49" valign="top"><form name="form1" method="post" action="">
			    <a href="#"><div id="ht" name="b"></div></a> 
				<div align="center" class="container">
					<table class="table table-border">
						<input type="button" name="Button" class="btn btn-primary" value="Xem thông tin cá nhân" onClick="javascript:window.open('lab8_2.php','_self')">
						<input type="button" name="Button" class="btn btn-primary" value="Đăng xuất" onClick="javascript:window.open('lab8_3.php','_self')">
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td height="346">&nbsp;</td>
		</tr>
	</table>
</body>
</html>
<?php ob_flush(); ?>
