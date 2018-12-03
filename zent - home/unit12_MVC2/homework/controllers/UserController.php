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
			$data = array(
				'name' => $_POST['name'],
				'password' => md5($_POST['password']),
				'mobile' => $_POST['mobile'],
				'email' => $_POST['email'],
				'status' => $_POST['status'],
				'gender' => $_POST['gender'],
				'created_at' => date('Y-m-d H:i:s'),
			);
			
			if ($_FILES['avatar']['error']>0) {
				$msg = "<p class=\"text-center\">File khong hop le </p>";
			} else {
				move_uploaded_file($_FILES['avatar']['tmp_name'], "upload/user/".$_FILES['avatar']['name']);
				$link = $_FILES['avatar']['name'];
			}

			$data['avatar']=$link;
			// thuc hien goi toi model de thuc hien truy van
			$data = $this->user_model->insert($data);

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
			$data = array(
				'name' => $_POST['name'],
				'mobile' => $_POST['mobile'],
				'email' => $_POST['email'],
				'status' =>  $_POST['status'],
				'gender' => $_POST['gender'],
				'updated_at' => date('Y-m-d H:i:s'),
			);
			
			$result = $this->user_model->update($data, $id);

			if ($result) {
				setcookie('update','Success',time()+3);
			} else {
				setcookie('update','Failed',time()+3);
			}
			header('Location: ?mod=users');
		}

		public function destroy()
		{
			$id = $_GET['id'];

			$result = $this->user_model->delete($id);

			if ($result) {
				setcookie('delete','Success',time()+3);
			} else {
				setcookie('delete','Failed',time()+3);
			}

			header('Location: ?mod=users');
		}

		public function error()
		{
			
		}
	}

 ?>