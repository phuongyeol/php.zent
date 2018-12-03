<?php 
	/**
	* 
	*/
	include_once 'models/Connection.php';
	class Category
	{
		public $category_conn;

		function __construct()
		{
			$connection = new Connection();
			$this->category_conn = $connection->conn;
		}

		//get list category
		public function getAll()
		{
			$sql = "SELECT * FROM categories WHERE deleted=0";

			$result =  $this->category_conn->query($sql);

			$data = array();

			while ($row = $result->fetch_assoc()) {
				$data[]=$row;
			}			

			return $data;
		}

		//find categories has id = $id to display in update-form
		public function find($id)
		{
			$sql = "SELECT * FROM categories WHERE id=".$id;
			$result = $this->category_conn->query($sql);
			return $result->fetch_assoc();				
		}

		//add a new product into DB
		public function store($code, $name, $description, $created_at)
		{
			$sql = "INSERT INTO categories(code, name, description, created_at, deleted) VALUES ('".$code."','".$name."','".$description."','".$created_at."',0);";
			
			return $this->category_conn->query($sql);
		}

		// update product's information
		public function update($code, $name, $description, $updated_at, $id)
		{
			$sql = "UPDATE categories SET code='".$code."', name='".$name."', description='".$description."',updated_at='".$updated_at."' WHERE id=".$id;
			
			return $this->category_conn->query($sql);
		}

		// delete a product
		public function delete($id)
		{
			$sql = "UPDATE categories SET deleted=1 WHERE id=".$id;
			return $this->category_conn->query($sql);
		}

	}

 ?>