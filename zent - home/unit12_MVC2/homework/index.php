<?php 


date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];

	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	} else {
		$act = 'list';
	}	

	switch ($mod) {
		case 'home':
			include 'views/home.php';
			break;
		case 'users':
			include_once 'controllers/UserController.php';
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
					$controller->destroy();
				break;

				default:
					$controller->error();
				break;
			}
			break;
		case 'products':
			include_once 'controllers/ProductController.php';
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
					$controller->destroy();
					break;

				default:
					$controller->error();
					break;
			}
			break;

		case 'categories':
			include_once 'controllers/CategoryController.php';
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
				case 'detail':
					$controller->detail();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'update':
					$controller->update();
				break;
				case 'delete':
					$controller->destroy();
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
	include_once 'views/home.php';
}

?>