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
		function list01($cat){

			$query1="SELECT * FROM news where category_id=".$cat;

			$result = $this->blog_conn->query($query1);
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
		
	}
	
?>