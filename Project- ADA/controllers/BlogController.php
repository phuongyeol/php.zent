<?php 
	include('models/Blog.php');
	include('models/Cate.php');
	class BlogController{
		var $blog_model;
		var $cate_model;
		function __construct(){
			$this->blog_model=new Blog();
			$this->cate_model=new Cate();
			
		}
		function list0(){
			if (isset($_GET['cat'])) {
				$cat=$_GET['cat'];
			}else{
				$cat = 1; 
			}
			$blogs=$this->blog_model->list0();
			$cates=$this->cate_model->list0();
			
			include('views/blog/list0.php');
		}
		function list01(){
			$cat=$_GET['cat'];
			$blogs=$this->blog_model->list01($cat);
			$cates=$this->cate_model->list0();
			include('views/blog/list0.php');
		}
		function detail(){
			$id=$_GET['id'];
			$blog=$this->blog_model->find($id);
			require_once('views/Blog/detail.php');
		} 
	}
?>