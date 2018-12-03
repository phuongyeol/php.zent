<?php 
/**
* 
*/
include_once 'models/Category.php';

class CategoryController
{
	public $model;

	function __construct()
	{
		$this->model = new Product();
	}

	function list()
	{
		$data = $this->model->getAll();
		include_once 'views/categories/list.php';
	}

	function store()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'name' => $_GET['name'],
				'description' => $_GET['description'],
			);
		}
		$this->model->insert($data);
		header('location: ?mod=category');
	}
}
 ?>