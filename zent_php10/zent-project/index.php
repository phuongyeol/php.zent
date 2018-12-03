<?php 
	// Đây anh
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	session_start();
	// session_destroy();
	
	if (isset($_GET['mod'])) {

		$mod = $_GET['mod'];

		if (isset($_GET['act'])) {
			$act = $_GET['act'];
		} else {
			$act='list1';
		}

		switch ($mod) {
			case 'news':
				include_once ('controllers/NewsController.php');
				$controller = new NewsController();
				switch ($act) {
					case 'getAll':	
						$controller->getAll();		
					break;
					case 'insert':			
						$controller->insert();
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

			case 'job':
				include_once ('controllers/JobController.php');

				$controller = new JobController();
				switch ($act) {
					case 'getAll':	
						$controller->getAll();		
					break;
					case 'insert':			
						$controller->insert();
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


					default:
						$controller->error();
					break;
				}
				break;
			case 'user':
				include_once ('controllers/UserController.php');
				$controller = new UserController();
				switch ($act) {
					case 'getAll':	
						$controller->getAll();		
					break;
					case 'insert':			
						$controller->insert();
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
				include 'views/admin/home/home.php';
			break;

			case 'login':
				include_once 'views/admin/home/home.php';
				
			default:
				echo "404";
			break;
		}
	} else if(isset($_SESSION['login'])&&$_SESSION['login']==true) {
		include_once 'views/admin/home/home.php';
	} else {
		include_once 'views/login/login.php';
	}
 ?>