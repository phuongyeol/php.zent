<?php 
	session_start();
		// session_destroy();
	if (isset($_GET['mssv'])&&isset($_SESSION['student'])) {
		$mssv=$_GET['mssv'];
		$student =$_SESSION['student'];


		if (str_word_count($mssv)>1) {
			$mssv=explode(" ",$mssv)[1];		
			unset($student[$mssv]);

		} 
		$_SESSION['student']=$student;
		header('Location: list.php');

	} else {
		header('Location: add.php');
	}
?>