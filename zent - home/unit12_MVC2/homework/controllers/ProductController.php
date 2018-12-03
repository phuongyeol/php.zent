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
			$data = array();
			if (isset($_POST['submit'])) {

				$data['code'] = $_POST['code'];
				$date['name'] = $_POST['name'];
				$data['quantity'] = $_POST['quantity'];
				$data['color'] = $_POST['color'];
				$data['price'] = $_POST['price'];
				// $data['category_id'] = $_POST['category_id'];
				$data['category_id'] = "";
				$data['created_at'] = date('Y-m-d H:i:s');

				$result = $this->product_model->insert($data);

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
				$categories = $this->category_model->getAll();
				include_once 'views/products/edit.php';					
			}
		}

		public function update()
		{
			$data=array();
			if (isset($_POST['submit'])) {

				$id = $_POST['id'];

				$data['code'] = $_POST['code'];
				$date['name'] = $_POST['name'];
				$data['quantity'] = $_POST['quantity'];
				$data['color'] = $_POST['color'];
				$data['price'] = $_POST['price'];
				$data['category_id'] = $_POST['category_id'];
				$data['updated_at'] = date('Y-m-d H:i:s');
				
				$result = $this->product_model->update($data, $id);

				if ($result) {
					setcookie('delete', 'Success!', time()+3);
				} else {
					setcookie('delete', 'Failed!', time()+3);
				}
			}
			header('Location: ?mod=products');
		}

		public function destroy()
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