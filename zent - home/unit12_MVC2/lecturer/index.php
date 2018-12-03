<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];
		$act='';
		if (isset($_GET['act'])) {
			$act = $_GET['act'];
		} else {
			$act='list';
		}
		switch ($mod) {
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
					case 'edit':
						$controller->edit();
						break;
					case 'delete':
						$controller->delete();
						break;
					case 'detail':
						$controller->detail();
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
					case 'edit':
						$controller->edit();
						break;
					case 'delete':
						$controller->delete();
						break;
					
					default:
						$controller->error();
						break;
				}
				break;
			case 'staffs':
				include_once 'controllers/StaffController.php';
				$controller = new StaffController();
				switch ($act) {
					case 'list':
						$controller->list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'delete':
						$controller->delete();
						break;
					
					default:
						$controller->error();
						break;
				}
				break;
			default:
				echo "404";
				break;
		}
	} else {
		$mod="home";
		$act="index";
	}

 ?>