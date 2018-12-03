<?php
   session_start();
   if ($_SESSION['isLogin'] == 1) {
   		echo "Admin!!";
   }else{
   		header('Location: 4.3.login.php');
   }
?>
<br>
<a href="4.3.logout.php">Logout</a>