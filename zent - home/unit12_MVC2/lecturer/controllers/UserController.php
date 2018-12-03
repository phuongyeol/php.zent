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
			$this->user_model= new User();
		}

		public function list()
		{			
			$data = $this->user_model->getAll();
			include_once 'views/users/list.php';
		}



		public function add()
		{
			echo "User - Add";
		}

		public function edit()
		{
			echo "User - Edit";
		}

		public function delete()
		{
			echo "User - Delete";
		}

		public function Error()
		{
			echo "ERROR";
		}

		public function detail()
		{
			if (isset($_GET['id'])) {
				$id= $_GET['id'];
			} 
			$user = $this->user_model->find($id);
			$user['status']=($user['status']==1?'Active':'Deactive');
			include_once 'views/users/detail.php';
		}
	}
 ?>