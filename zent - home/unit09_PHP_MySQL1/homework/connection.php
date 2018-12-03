<?php 

	$servername = 'localhost';
	$username = 'root';
	$password="";
	$dbname='zent_php09';
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	$conn->set_charset('utf8');

	if ($conn->connect_error) {
		die('Fail: '.$conn->connect_error);
	}

?>