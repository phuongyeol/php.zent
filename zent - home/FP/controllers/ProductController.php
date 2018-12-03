<?php 
/**
* 
*/
include_once 'models/Product.php';
include_once 'models/Category.php';

class ProductController
{
	public $model;

	function __construct()
	{
		$this->model = new Product();
	}

	function list()
	{
		$data = $this->model->getAll();
		include_once 'views/products/list.php';
	}

	function add()
	{
		$category_model = new Category();
		$categories = $category_model->getAll();
		include_once 'views/products/add.php';		
	}

	function store($data)
	{
		//lay du lieu tu form
			$data = array(
				'name' => $_POST['name'],
				'category_id' => $_POST['category'],
				'quantity' => $_POST['quantity'],
				'price' => $_POST['price'],
				'created_at' => date('Y-m-d H:i:s'),
			);
			$link = '';
			if ($_FILES['img']['error']>0) {
				$msg = "<p class=\"text-center\">File khong hop le </p>";
			} else {
				move_uploaded_file($_FILES['img']['tmp_name'], "upload/staff/".$_FILES['avatar']['name']);
				$link = $_FILES['img']['name'];
			}

			$data['img']=$link;

			// thuc hien goi toi model de thuc hien truy van
			$data = $this->model->insert($data);

			//chuyen trang
			header('location: ?mod=product');
	}
}
 ?>