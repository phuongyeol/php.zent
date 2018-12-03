<?php 
	session_start();
	
	if ($_SESSION['login']==true) {
		# code...
		echo "Admin Page"."</br>";
		echo "<a href=\"logout.php\">Logout</a> ";
	} else {
		header('Location: login.php');
	}
	
 ?>