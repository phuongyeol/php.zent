<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Date time</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		

		
		<?php

		date_default_timezone_set('Asia/Ho_Chi_Minh');

		echo "<br/>".date('d/m/y'); 
		echo "<br/>".date('D/M/Y') ;
		echo "<br/>".date('D/M/y') ;
		echo "<br/>".date('H:i:s D/M/y', time()) ;
		echo "<br/>".date('Y/m/d H:i:s') ;

		//convert datetime to int: datetime normal
		echo "<br/>"."Convert datetime to int: ";
		echo "<br/>".strtotime(date('Y-m-d H:i:s'));

		// mktime ($hour, $minute, $second, $month, $day , $year);
		$next = mktime (0, 0, 0, 01, 13+13 , 2018);
		echo "<br/>".date('d/m/y', $next);

		?>
		<?php die(); ?>
		<?php 
		date_default_timezone_set('Asia/Ho_Chi_Minh');

		//lấy danh sách timezone
		$timezone = DateTimeZone::listIdentifiers() ;
		foreach ($timezone as $item){
			echo $item . '<br/>';
		} ?>
	</div>
</body>
</html>