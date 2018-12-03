<?php 
	include('models/Blog.php');
	class BlogController{
		var $blog_model;
		function __construct(){
			$this->blog_model=new Blog();
		}
		function list(){
			$blogs=$this->blog_model->list();
			include('views/pageadmin/list0.php');
		}
		function detail(){
			$id=$_GET['id'];
			$blog=$this->blog_model->find($id);
			require_once('views/pageadmin/detail.php');
		} 
	}
?>