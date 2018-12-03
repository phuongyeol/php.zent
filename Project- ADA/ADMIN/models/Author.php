<?php 
	include_once('models/Connection.php');
	class Author{
		var $conn;

		function __construct(){	
			$obj =new Connection();
			$this->conn =$obj->conn;
		}
		function login($email,$pass){		

			$query="SELECT * FROM user Where email='".$email."' and password='".$pass."'";

			$result = $this->conn->query($query)->fetch_assoc();
			
			if ($result != NULL) {
				$_SESSION['isLogin'] = true;
				$_SESSION['user'] = $result;
				return true;
			}else{
				return false;
			}

		}
	}
?>