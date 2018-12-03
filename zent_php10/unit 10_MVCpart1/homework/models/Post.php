<?php 
	include_once('Connection.php');
	class Post{
		private $conn;
		public function __construct() {
			$connection = new Connection();
			$this->conn = $connection->conn;
		}

		public function list1(){
			//Mảng chứa dữ liệu trả về
			$post_data = array();

			// Cau lenh truy van co so du lieu
			$query = "SELECT * FROM news";

			// Thuc thi cau lenh truy van co so du lieu
			$result = $this->conn->query($query);
			
			while($row = $result->fetch_assoc()) {
				$post_data[] = $row;
			}

			return $post_data;

		}
	}
 ?>