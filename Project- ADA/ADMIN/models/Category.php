<?php 
	include_once('models/Connection.php');
	class Category{
		var $conn;

		function __construct(){
			$object =new Connection();
			$this->conn =$object->conn;
		}
		function list0(){

			$query="SELECT * FROM categorys";

			$result = $this->conn->query($query);
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
	}

?>