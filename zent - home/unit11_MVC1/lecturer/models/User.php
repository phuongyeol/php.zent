<?php 
	/**
	* 
	*/
	include_once 'Connection.php';

	class User 
	{
		public $user_conn;

		function __construct()
		{
			$connection = new Connection();
			$this->user_conn = $connection->conn;
		}

		public function getAll()
		{
			$data = array();
			$query = "SELECT * FROM lecturer_users";

			$result = $this->user_conn->query($query);
			
			while ($row=$result->fetch_assoc()) {
				$row['status'] = ($row['status']==1?'Active':'Deactive');
				$data[]=$row;
			}
			return $data;
		}

		public function find($id)
		{
			$query = "SELECT * FROM lecturer_users WHERE id='".$id."'";

			$result= $this->user_conn->query($query);

			return $result->fetch_assoc();
		}
	}

?>