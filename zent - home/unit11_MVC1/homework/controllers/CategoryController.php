<?php 

	/**
	* 
	*/
	include_once 'controllers/CategoryController.php';

	class CategoryController
	{
		public $category_model;

		function __construct()
		{
			$this->category_model=new Category();
		}

		public function list()
		{
			$data = $this->category_model->getAll();
			include_once 'views/categories/list.php';
		}

		public function add()
		{
			include_once 'views/categories/add.php';
		}

		public function store()
		{
			if (isset($_POST['submit'])) {
				$code = $_POST['code'];
				$name = $_POST['name'];
				$description = $_POST['description'];
				$created_at = date('Y-m-d H:i:s');

				$result = $this->category_model->store($code, $name, $description, $created_at);
				if ($result) {
					setcookie('add', 'Success!', time()+3);
				} else {
					setcookie('add','Failed', time()+3);
				}
			} else {
				setcookie('add','Failed', time()+3);
			}
			header('Location: ?mod=categories');
		}

		public function edit()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$category = $this->category_model->find($id);
				include_once 'views/categories/edit.php';					
			}
		}

		public function update()
		{
			
			$id = $_GET['id'];
			$code = $_POST['code'];
			$name = $_POST['name'];
			$description = $_POST['description'];

			$updated_at = date('Y-m-d H:i:s');

			$result = $this->category_model->update($code, $name, $description, $updated_at, $id);

			if ($result) {
				setcookie('delete', 'Success!', time()+3);
			} else {
				setcookie('delete', 'Failed!', time()+3);
			}
			
			header('Location: ?mod=categories');
		}

		public function delete()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$result = $this->category_model->delete($id);
				if ($result) {
					setcookie('delete', 'Success!', time()+3);
				} else {
					setcookie('delete', 'Failed!', time()+3);
				}
				
			} else {
				setcookie('delete', 'Failed!', time()+3);
			}
			header('Location: ?mod=categories');
		}
	}
	?>