<?php 
	include_once('models/Connection.php');
	class Cate{
		var $blog_conn;

		function __construct(){
			$blog_conn =new Connection();
			$this->blog_conn =$blog_conn->conn;
		}
		
		function list0(){

			$query2="SELECT * FROM categorys";

			$result2 = $this->blog_conn->query($query2);
			$data2=array();
			while ($row=$result2->fetch_assoc()) {
				$data2[]=$row;
			}
			return $data2;
		}
		
	}
?>