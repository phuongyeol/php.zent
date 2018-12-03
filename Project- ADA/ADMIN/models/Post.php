<?php 
	/**
	* 
	*/
	include_once('models/Connection.php');
	class Post{
		var $post_conn;

		function __construct(){
			$post_conn =new Connection();
			$this->post_conn =$post_conn->conn;
		}
		function list0(){

			$query="SELECT * FROM news";

			$result = $this->post_conn->query($query);
			$data=array();
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
			return $data;
		}
		function delete($id){
			$query = "DELETE FROM news WHERE id = ".$id;
			$result=$this->post_conn->query($query);
			return $result;
		}

		function find($id){
			$query="SELECT * FROM news Where id=".$id;
			$result=$this->post_conn->query($query)->fetch_assoc();
			return $result;
		}

		function insert($data){

			$title= $_POST['title'];
			$short_content= $_POST['short_content'];
			$contents= $_POST['contents'];
			$authoror= $_POST['author'];
			$image= $_POST['image'];
			$category_id=$_POST['category_id'];

			

			$query="INSERT INTO news(title,short_content,content,images,date_public,author,category_id) values ('".$title."','".$short_content."','".$contents."','".$image."','".date('Y-m-d H:i:s')."','".$authoror."','".$category_id."')";

			$result=$this->post_conn->query($query);

			return $result;
		}
		function update($data,$id){

			$title= $_POST['title'];
			$short_content= $_POST['short_content'];
			$contents= $_POST['contents'];
			$authoror= $_POST['author'];
			$image= $_POST['image'];
			$category_id=$_POST['category_id'];

			$query="UPDATE news SET title='".$title."',short_content='".$short_content."',content='".$contents."',author='".$authoror."',images='".$image."',date_public='".date('D-m-y H:i:s')."',category_id='".$category_id."' WHERE id=".$id;

			$result=$this->post_conn->query($query);

			return $result;
		}
	}
?>