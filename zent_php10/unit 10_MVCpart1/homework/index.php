<meta charset="utf-8">
<?php 
	if (isset($_GET['mod'])) {
		$mod = $_GET['mod'];
	}else{
		$mod = 'home';
	}
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}else{
		$act = 'index';
	}

	switch ($mod) {
		case 'post':
		// Chức năng quản lý bài viết:
			include_once('controllers/PostController.php');
			$post = new PostController();
			switch ($act) {
				case 'list':
					$post->list1();
					break;
				case 'add':
					$post->add();
					break;
				default:
					break;
			}
			break;
		
		default:
			# code...
			break;
	}
?>