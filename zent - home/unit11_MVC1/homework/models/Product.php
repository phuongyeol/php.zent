<?php 
	/**
	* 
	*/
	include_once 'models/Connection.php';

	class Product
	{
		public $product_connection;

		function __construct()
		{
			$connection = new Connection();
			$this->product_connection = $connection->conn;
		}

		//get list product
		public function getAll()
		{
			// $sql = "SELECT * FROM products";
			$query = "SELECT  P.id, P.name, P.code, P.color,P.price, P.quantity, P.created_at, P.updated_at,  P.category_id, C.description, C.name category_name, C.code category_code
			FROM products P, categories C
			WHERE P.category_id=C.id and P.deleted=0;";

			$result =  $this->product_connection->query($query);

			$data = array();

			while ($row = $result->fetch_assoc()) {
				$data[]=$row;
			}			

			return $data;
		}

		//find categories has id = $id to display in update-form
		public function find($id)
		{
			$sql = "SELECT  P.id, P.name, P.code, P.color,P.price, P.quantity, P.created_at, P.updated_at,  P.category_id, C.description, C.name category_name, C.code category_code
			FROM products P, categories C
			WHERE P.category_id=C.id and P.deleted=0 and P.id=".$id;
			$result = $this->product_connection->query($sql);
			return $result->fetch_assoc();				
		}

		// //get list category
		// public function getCategories()
		// {
		// 	$query = "SELECT * FROM categories;";

		// 	$result =  $this->product_connection->query($query);

		// 	$data = array();

		// 	while ($row = $result->fetch_assoc()) {
		// 		$data[]=$row;
		// 	}

		// 	return $data;
		// }

		//add a new product into DB
		public function store($code, $name, $category_id, $color,$quantity, $price, $created_at)
		{
			$sql = "INSERT INTO products(code, name, category_id, color,quantity, price, created_at, deleted) VALUES ('".$code."','".$name."','".$category_id."','".$color."','".$quantity."','".$price."','".$created_at."',0);";
			return $this->product_connection->query($sql);
		}

		// update product's information
		public function update($code, $name, $category_id, $color,$quantity, $price, $updated_at, $id)
		{
			$sql = "UPDATE products SET code='".$code."', name='".$name."', category_id='".$category_id."',color='".$color."',quantity='".$quantity."',price='".$price."',updated_at='".$updated_at."' WHERE id=".$id;
			return $this->product_connection->query($sql);
		}

		// delete a product
		public function delete($id)
		{
			$sql = "UPDATE products SET deleted=1 WHERE id=".$id;
			return $this->product_connection->query($sql);
		}
	}

	?>