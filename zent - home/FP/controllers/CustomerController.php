<?php 
	/**
	* 
	*/
	include_once 'models/Customer.php';

	class CustomerController
	{
		public $model;

		function __construct()
		{
			$this->model = new Customer();
		}

		function list()
		{
			$data = $this->model->getAll();
			include 'views/customers/list.php';
		}

		function add(){
			include_once 'views/customers/add.php';
		}

		function store()
		{
			//lay du lieu tu form
			$data = array(
				'name' => $_POST['name'],
				'password' => md5($_POST['password']),
				'mobile' => $_POST['mobile'],
				'email' => $_POST['email'],
				'job' => $_POST['job'],
				'address' => $_POST['address'],
				'gender' => $_POST['gender'],
				'created_at' => date('Y-m-d H:i:s'),
			);
			$link = '';
			if ($_FILES['avatar']['error']>0) {
				$msg = "<p class=\"text-center\">File khong hop le </p>";
			} else {
				move_uploaded_file($_FILES['avatar']['tmp_name'], "upload/staff/".$_FILES['avatar']['name']);
				$link = $_FILES['avatar']['name'];
			}

			$data['avatar']=$link;

			// thuc hien goi toi model de thuc hien truy van
			$data = $this->model->insert($data);

			//chuyen trang
			header('location: ?mod=staff');
		}

		function edit(){
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$staff = $this->model->find($id);
				include_once 'views/customers/edit.php';
			} else {
				header('location: ?mod=staff');
			}			
		}

		function update()
		{
			if (isset($_POST['id'])) {

				$id = $_POST['id'];
				
				$data = array(
					'name' => $_POST['name'],
					'gender' => $_POST['gender'],
					'address' => $_POST['address'],
					'email' => $_POST['email'],
					'mobile' => $_POST['mobile'],				
					'job' => $_POST['job'],				
					'updated_at' => date('Y-m-d H:i:s'),
				);

				$link = '';

				if ($_FILES['avatar']['error']>0) {
					$msg = "<p class=\"text-center\">File khong hop le </p>";
				} else {
					move_uploaded_file($_FILES['avatar']['tmp_name'], "upload/staff/".$_FILES['avatar']['name']);
					$link = $_FILES['avatar']['name'];
				}

				$data['avatar']=$link;

				$result = $this->model->update($data, $id);

				if ($result) {
					setcookie('update','Success',time()+3);
				} else {
					setcookie('update','Failed',time()+3);
				}
			}
			
			header('Location: ?mod=customer');
		}
	}

	?>