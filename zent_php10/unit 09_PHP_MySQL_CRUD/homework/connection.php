<?php 

	$servername = 'localhost';
	$username = 'root';
	$password="root";
	$dbname='zent_table';
	
	$conn = new mysqli($servername,$username,$password,$dbname);
	$conn->set_charset('utf8');

	if ($conn->connect_error) {
		die('Fail: '.$conn->connect_error);
	}

?>