<?php 
	/**
	* 
	*/
	include_once('models/Connection.php');
	class User{
		var $user_conn;

		function __construct(){	
			$user_conn =new Connection();
			$this->user_conn =$user_conn->conn;
		}
		function list0(){		

			$query="SELECT * FROM user";

			$result = $this->user_conn->query($query);
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
		function delete($id){
			$query = "DELETE FROM user WHERE id = ".$id;
			$result=$this->user_conn->query($query);
			return $result;
		}

		function find($id){
			$query="SELECT * FROM user Where id=".$id;
			$result=$this->user_conn->query($query)->fetch_assoc();
			return $result;
		}

		function insert($data){

			$name= $_POST['name'];
			$password= md5($_POST['password']);
			$email= $_POST['email'];
			$address= $_POST['address'];

			$query="INSERT INTO user(name,email,password,address,date) values ('".$name."','".$email."','".$password."','".$address."','".date('Y-m-d H:i:s')."')";

			$result=$this->user_conn->query($query);

			return $result;
		}
		function update($data,$id){

			$name= $_POST['name'];
			$password= md5($_POST['password']);
			$email= $_POST['email'];
			$address= $_POST['address'];

			$query="UPDATE user SET name='".$name."',email='".$email."',password='".$password."',address='".$address."',date='".date('D-m-y H:i:s')."' WHERE id=".$id;

			$result=$this->user_conn->query($query);

			return $result;
		}
	}
?>