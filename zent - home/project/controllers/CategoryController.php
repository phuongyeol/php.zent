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
		$this->model = new Category();
	}

	function list()
	{
		$data = $this->model->getAll();
		include_once 'views/admin/categories/list.php';
	}

	function store()
	{
		$data = array(
			'name' => $_POST['name'],
			'description' => $_POST['description'],
		);
		$this->model->insert($data);
		header('location: ?mod=category');
	}
}

 ?>