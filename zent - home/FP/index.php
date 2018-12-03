<?php 
include 'controllers/StaffController.php';
include_once 'controllers/ProductController.php';
include_once 'controllers/CategoryController.php';

date_default_timezone_set('Asia/Ho_Chi_Minh');

$_SESSION['login']=true;

if (!isset($_SESSION['login'])||$_SESSION['login']==false) {

	include 'views/staffs/login.php';

} else {
	
	if (isset($_GET['mod'])) {

		$mod = $_GET['mod'];

		if (isset($_GET['act'])) {
			$act = $_GET['act'];
		} else {
			$act='list';
		}

		switch ($mod) {
			case 'staff':
				$controller = new StaffController();
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

					default:

					break;
				}
			break;
			case 'category':
				$controller = new CategoryController();
				switch ($act) {
					case 'list':			
						$controller->list();
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

					default:

					break;
				}
			break;
			case 'product':
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

					default:

					break;
				}
			break;
			case 'bill':
						# code...
			break;

			case 'home':
				include 'views/home.php';
			break;

			default:
				
			break;
		}

	} else {
		$mod = 'home';
		include 'views/home.php';
	}
}
?>