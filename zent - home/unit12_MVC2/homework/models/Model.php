<?php 
	/**
	* 
	*/
	include_once 'models/Connection.php';
	class Model
	{
		public $conn;
		public $table;
		public $primary_key='id';

		function __construct()
		{
			$connection = new Connection();
			$this->conn = $connection->conn;
		}

		//lay ra danh sach user
		public function getAll()
		{
			$query = "SELECT * FROM ".$this->table." WHERE deleted='0'";

			$result = $this->conn->query($query);

			$data = array();

			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}

			return $data;
		}

		public function find($id)
		{
			$sql = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key."= '".$id."'";
			$result = $this->conn->query($sql);
			return $result->fetch_assoc();				
		}

		public function insert($data)
		{
			$field="";
			$values="";
			foreach ($data as $key => $value) {
				$field .= $key.",";
				$values .= "'".$value."',";
			}
			// xử lý chuỗi: cắt dấu phẩy cuối cùng
			$field = trim($field, ',');
			$values = trim($values, ',');

			$sql = "INSERT INTO ".$this->table.' ('.$field.') VALUES ('.$values.')';
			
			return $this->conn->query($sql);
		}


		public function update($data, $id)
		{
			$set = "";
			foreach ($data as $key => $value) {
				$set .= $key." = "."'".$value."',";
			}
			$set = trim($set,',');
			$sql = "UPDATE ".$this->table." SET ".$set." WHERE ".$this->primary_key." = ".$id;

			return $this->conn->query($sql);
		}

		public function delete($id)
		{
			$sql = "UPDATE ".$this->table." SET deleted = '1'  WHERE ".$this->primary_key." = ".$id;
			
			return $this->conn->query($sql);
		}
	}

 ?>