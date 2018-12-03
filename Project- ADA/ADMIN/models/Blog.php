<?php 
	include_once('models/Connection.php');
	class Blog{
		var $blog_conn;

		function __construct(){
			$blog_conn =new Connection();
			$this->blog_conn =$blog_conn->conn;
		}
		function list0(){

			$query="SELECT * FROM news";

			$result = $this->blog_conn->query($query);
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
		function find($id){
			$query="SELECT * FROM news Where id=".$id;
			$result=$this->blog_conn->query($query)->fetch_assoc();
			return $result;
		}
	}
	
?>