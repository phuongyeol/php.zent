<?php 
	session_start();
	//session_destroy();

	if (isset($_SESSION['isLogin'])) {

		if (isset($_GET['mod'])) {
			$mod =$_GET['mod'];
		}else{
			$mod='dashboard';
		}
		if (isset($_GET['act'])) {
			$act =$_GET['act'];
		}else{
			$act='index';
		}

		switch ($mod) {
			case 'blog':

				if (isset($_GET['act'])) {
					$act =$_GET['act'];
				}else{
					$act='list0';
				}
				include_once('controllers/BlogController.php');
				$blog = new BlogController();
				switch ($act) {	
				 	case 'detail':
				 		$blog->detail();
				 		break;
				 	case 'list0':
				 		$blog->list0();
				 		break;
				}	
				break;	
			case 'logout':
				unset($_SESSION['isLogin']);
				header('Location: ../index.php');
				break;
			case 'post':
				include_once('controllers/PostController.php');
				$post = new PostController();
				switch ($act) {
				 	case 'list0':
				 		$post->list0();
				 		break;
				 	case 'add':
				 		$post->add();
				 		break;
				 	case 'store':
				 		$post->store();
				 		break;
				 	case 'detail':
				 		$post->detail();
				 		break;
				 	case 'edit':
				 		$post->edit();
				 		break;
				 	case 'update':
				 		$post->update();
				 		break;
				 	case 'delete':
				 		$post->delete();
				 		break;
				 	default:
				 		# code...
				 		break;
				 } 
				break;
			case 'user':
				include_once('controllers/UserController.php');
				$user = new UserController();
				switch ($act) {
				 	case 'list0':
				 		$user->list0();
				 		break;
				 	case 'add':
				 		$user->add();
				 		break;
				 	case 'store':
				 		$user->store();
				 		break;
				 	case 'detail':
				 		$user->detail();
				 		break;
				 	case 'edit':
				 		$user->edit();
				 		break;
				 	case 'update':
				 		$user->update();
				 		break;
				 	case 'delete':
				 		$user->delete();
				 		break;
				 	default:
				 		# code...
				 		break;
				 } 
				break;
			case 'dashboard':
				include_once('controllers/DashboardController.php');
				$db = new DashboardController();
				switch ($act) {
				 	case 'index':
				 		$db->index();
				 		break;

				 	default:
				 		break;
				 } 
				break;
			default:

				break;
		}
	}else{
		$mod='author';
		if (isset($_GET['act'])) {
			$act=$_GET['act'];
		}else{
			$act='login';
		}
		include_once('controllers/AuthorController.php');
		$author = new AuthorController();
		switch ($act) {	
		 	case 'author':
		 		$author->author();
		 		break;
		 	
		 	default:
		 		$author->login();
		 		break;
		} 
	}

?>