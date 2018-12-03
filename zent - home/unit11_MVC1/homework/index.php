<?php 
include_once 'controllers/UserController.php';
include_once 'controllers/ProductController.php';
include_once 'controllers/CategoryController.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];

	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	} else {
		$act = 'list';
	}	

	switch ($mod) {

		case 'users':
			$controller = new UserController();

			switch ($act) {

				case 'list':
					$controller->list();
				break;
				case 'add':
					$controller->add();
				break;
				case 'store':
					$controller->store();
				break;
				case 'edit':
					$controller->edit();
				break;
				case 'update':
					$controller->update();
				break;
				case 'delete':
					$controller->delete();
				break;

				default:
					$controller->error();
				break;
			}
			break;
		case 'products':

			$controller = new ProductController();

			switch ($act) {

				case 'list':

					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'store':
					$controller->store();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
				break;
				case 'delete':
					$controller->delete();
					break;

				default:
					$controller->error();
					break;
			}
			break;

		case 'categories':

			$controller = new CategoryController();

			switch ($act) {

				case 'list':
					$controller->list();
					break;
				case 'add':
					$controller->add();
					break;
				case 'store':
					$controller->store();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
				break;
				case 'delete':
					$controller->delete();
					break;

				default:
					$controller->error();
					break;
			}
			break;
		case 'home':
			include_once 'views/home.php';
			break;
		default:
			$mod='home';
		break;
	}
} else {
	$mod = 'home';
	include_once 'views/home.php';
}

?>