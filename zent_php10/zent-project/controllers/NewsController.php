<?php 
	/**
	* 
	*/
	include_once 'models/News.php';

	class NewsController
	{
		public $model;
		function __construct()
		{
			$this->model=new News();
		}

		function list1()
		{
			$data = $this->model->getAll();
			include_once 'views/admin/news/list1.php';
		}

		function update()
		{
			if (isset($_POST['submit'])) {

				if (isset($_POST['id'])) {

					$id=$_POST['id'];

					$data = array(
						'title' => $_POST['title'],
						'short_content' => $_POST['short_content'],
						'content' => $_POST['content'],
						'image_id' => $_POST['image'],
						'author' => $_POST['author'],
						'updated_at' => date('Y-m-d H:i:s'),
					);

					// Thực hiện gọi tới models để truy vấn
					$result = $this->model->update($data, $id);
				}				
			}

			// chuyen trang
			header('location: ?mod=news');
		}

		function insert()
		{
			if (isset($_POST['submit'])) {

				if (isset($_POST['id'])) {

					$id=$_POST['id'];

					$data = array(
						'title' => $_POST['title'],
						'short_content' => $_POST['short_content'],
						'content' => $_POST['content'],
						'image' => $_POST['image'],
						'updated_at' => date('Y-m-d H:i:s'),
					);

					// thuc hien goi toi model de thuc hien truy van
					$result = $this->model->insert($data, $id);
				}				
			}

			// chuyen trang
			header('location: ?mod=news');
		}
		function delete($id)
		{
			$data = $this->model->delete($this->id);
			include_once 'views/admin/news/list1.php';
		}


		function error()
		{
			# code...
		}
	}

	?>