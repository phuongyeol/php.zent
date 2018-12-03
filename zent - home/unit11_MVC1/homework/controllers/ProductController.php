<?php 

	/**
	* 
	*/
	include_once 'models/Product.php';
	include_once 'models/Category.php';

	class ProductController
	{
		public $product_model;
		public $category_model;

		function __construct()
		{
			$this->product_model = new Product();
			$this->category_model = new Category();
		}

		// load page list product
		public function list()
		{
			$data = $this->product_model->getAll();
			
			$categories = $this->category_model->getAll();

			include_once 'views/products/list.php';
		}

		//display form add new product
		public function add()
		{
			$categories = $this->category_model->getAll();
			include_once 'views/products/add.php';
		}

		//add new product into DB
		public function store()
		{
			if (isset($_POST['submit'])) {
				$code = $_POST['code'];
				$name = $_POST['name'];
				$quantity = $_POST['quantity'];
				$color = $_POST['color'];
				$price = $_POST['price'];
				$category_id = $_POST['category_id'];
				$created_at = date('Y-m-d H:i:s');

				$result = $this->product_model->store($code, $name, $category_id, $color,$quantity, $price, $created_at);

				if ($result) {
					setcookie('delete', 'Success!', time()+3);
				} else {
					setcookie('delete', 'Failed!', time()+3);
				}
			} else {
				setcookie('delete', 'Failed!', time()+3);
			}
			header('Location: ?mod=products');
		}

		public function edit()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$product = $this->product_model->find($id);
				include_once 'views/products/edit.php';					
			}
		}

		public function update()
		{
			if (isset($_POST['submit'])) {
				$id = $_POST['id'];
				$code = $_POST['code'];
				$name = $_POST['name'];
				$quantity = $_POST['quantity'];
				$color = $_POST['color'];
				$price = $_POST['price'];
				$category_id = $_POST['category_id'];
				$update_at = date('Y-m-d H:i:s');

				$result = $this->product_model->update($code, $name, $category_id, $color,$quantity, $price, $updated_at, $id);

				if ($result) {
					setcookie('delete', 'Success!', time()+3);
				} else {
					setcookie('delete', 'Failed!', time()+3);
				}
			}
			header('Location: ?mod=products');
		}

		public function delete()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$result = $this->product_model->delete($id);
				if ($result) {
					setcookie('delete', 'Success!', time()+3);
				} else {
					setcookie('delete', 'Failed!', time()+3);
				}
				
			} else {
				setcookie('delete', 'Failed!', time()+3);
			}
			header('Location: ?mod=products');
		}

		public function error()
		{
			# code...
		}
	}

 ?>