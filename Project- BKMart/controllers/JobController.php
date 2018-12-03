<?php 
	/**
	* 
	*/
	include_once 'models/Job.php';
	class JobController 
	{
		public $model;
		
		function __construct()
		{
			$this->model = new Job();
		}

		function list1()
		{
			$data = $this->model->getAll();
			include_once 'views/admin/jobs/list1.php';
		}

		function store()
		{
			$data = array(
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'created_at' => date('Y-m-d H:i:s'),
			);
			$this->model->insert($data);
			header('location: ?mod=job');
		}

		function staff_list1()
		{
			$job_id = $_GET['id'];
			$job = $this->model->find($job_id);
			$data = $this->model->staff_list1($job_id);
			include_once 'views/admin/jobs/staff_list1.php';
		}

		function update()
		{
			if (isset($_POST['submit'])) {
				
				$data = array(
					'name' => $_POST['name'],
					'description' => $_POST['description'],
					'updated_at' => date('Y-m-d H:i:s'),
				);

				if (isset($_POST['id'])) {
					$id=$_POST['id'];
					$this->model->update($data,$id);
				}				
			}
			header('location: ?mod=job');
		}

		function destroy()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$result = $this->model->delete($id);
				if ($result) {
					header('location: ?mod=job&act=list1');
				} else {
					setcookie('delete','Failed',time()+3);
					header('location: ?mod=job&act=list1');
				}
			}
		}
	}

 ?>