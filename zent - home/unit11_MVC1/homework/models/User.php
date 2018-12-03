<?php 
	/**
	* 
	*/
	include_once 'models/Connection.php';
	class User
	{
		public $user_connection;

		function __construct()
		{
			$connection = new Connection();
			$this->user_connection = $connection->conn;
		}

		//lay ra danh sach user
		public function getAll()
		{
			$query = "SELECT * FROM lecturer_users";

			$result = $this->user_connection->query($query);

			$data = array();

			while ($row=$result->fetch_assoc()) {
				// xử lý dữ liệu
				$row['status'] = ($row['status']==1)?'Active':'Deactive';
				$row['gender'] = ($row['gender']==1)?'Male':'Female';
				$data[]=$row;
			}

			return $data;
		}

		//find user has id = $id to display in update-form
		public function find($id)
		{
			$sql = "SELECT * FROM lecturer_users WHERE id=".$id;
			$result = $this->user_connection->query($sql);
			return $result->fetch_assoc();				
		}

		//them 1 user vao CSDL
		public function insert($name, $password, $mobile, $email, $status, $gender, $created_at)
		{
			$query = "INSERT INTO lecturer_users(name, password, mobile, email, status, gender, created_at) VALUES('".$name."','".$password."',".$mobile.",'".$email."',".$status.",".$gender.",'".$created_at."')";

			$result = $this->user_connection->query($query);

			return $result;
		}

		//sua thong tin nguoi su dung
		public function update($id,$name, $mobile, $email, $status, $gender, $updated_at)
		{
			$sql= "UPDATE lecturer_users SET name='".$name."',mobile='".$mobile."', email='".$email."', status=".$status.", gender=".$gender.", updated_at='".$updated_at."' WHERE id=".$id.";";
			
			return $this->user_connection->query($sql);
		}

		//change to destroy function
		public function delete($id)
		{
			$sql = "DELETE FROM lecturer_users WHERE id = ".$id;

			$data = $this->user_connection->query($sql);
			
		}
	}

 ?>