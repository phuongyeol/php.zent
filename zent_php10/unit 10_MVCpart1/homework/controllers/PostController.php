<meta charset="utf-8">
<?php 
	include_once('models/Post.php');
	class PostController
	{
		function __construct(){
			echo "<h3> Quản lý bài viết</h3>";
		}
		function list1(){
			$post_model = new Post();
			$post_data = $post_model->list1();
			// echo "<pre>";
			// 	print_r($post_data);
			// echo "</pre>";
			include_once('views/post/list1.php');
		}
		function add(){
			include_once('views/post/add.php');
		}
	}

 ?>