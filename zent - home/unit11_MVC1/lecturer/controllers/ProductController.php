<?php 

	/**
	* 
	*/
	class ProductController 
	{
		
		function __construct()
		{
			echo "----- Product -----<br>";
		}

		public function list()
		{
			echo "Product - List";
		}

		public function add()
		{
			echo "Product - Add";
		}

		public function edit()
		{
			echo "Product - Edit";
		}

		public function delete()
		{
			echo "Product - Delete";
		}

		public function Error()
		{
			echo "ERROR";
		}
	}
 ?>