<?php 
	/**
	* 
	*/
	include_once 'models/Model.php';

	class Category extends Model
	{
		public $table = 'mvc12_categories';

		public function products($id)
		{
			$data = array();

			$query = "SELECT * FROM products WHERE category_id=".$id;

			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;

		}

	}

 ?>