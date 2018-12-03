<?php 
	class Connection{
		var $conn;
		function __construct(){
			$servername = "localhost"; 
			$username = "root";  	
			$password = "root";   	
			$dbname = "zent_project";  
			
			$this->conn = new mysqli($servername, $username, $password, $dbname);

			$this->conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}
	}
?>