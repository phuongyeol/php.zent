<?php 
	session_start();
	session_destroy();
	header('Location: 05.3.login.php');
 ?>