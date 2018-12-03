<?php 

		$mod='blog';

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
		 	case 'list01':
		 		$blog->list01();
		 		break;
		}
		
?>