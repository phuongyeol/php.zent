<?php 
	/**
	* 
	*/
	include_once 'models/User.php';

	class UserController 
	{
		public $user_model;

		function __construct()
		{
			$this->user_model = new User();			
		}

		public function list()
		{
			$data = $this->user_model->getAll();
			include_once 'views/user/list.php';
		}

		public function add()
		{
			include_once 'views/user/add.php';
		}

		public function store()
		{
			//lay du lieu tu form
			$name = $_POST['name'];
			$password = md5($_POST['password']);
			$mobile = $_POST['mobile'];
			$email = $_POST['email'];
			$status = $_POST['status'];
			$gender = $_POST['gender'];
			$created_at = date('Y-m-d H:i:s');

			// thuc hien goi toi model de thuc hien truy van
			$data = $this->user_model->insert($name, $password, $mobile, $email, $status, $gender, $created_at);

			//chuyen trang
			header('location: ?mod=users');
		}


		public function edit()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$user = $this->user_model->find($id);
				include_once 'views/user/edit.php';					
			}
		}

		public function update()
		{
			// $data = array();
			$id = $_GET['id'];

			$name = $_POST['name'];
			$mobile = $_POST['mobile'];
			$email = $_POST['email'];
			$status = $_POST['status'];
			$gender = $_POST['gender'];
			$updated_at = date('Y-m-d H:i:s');
			
			$result = $this->user_model->update($id, $name, $mobile, $email, $status, $gender, $updated_at);
			if ($result) {
				setcookie('update','Success',time()+3);
			} else {
				setcookie('update','Failed',time()+3);
			}
			header('Location: ?mod=users');
		}

		public function delete()
		{
			$id = $_GET['id'];

			$data = $this->user_model->delete($id);

			header('Location: ?mod=users');
		}

		public function error()
		{
			
		}
	}

 ?>