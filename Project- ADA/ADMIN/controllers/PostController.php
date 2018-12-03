<?php 
	/**
	* 
	*/
	include('models/Post.php');
	include('models/Category.php');
	class PostController{
		var $post_model;
		var $cat_model;
		function __construct(){
			$this->post_model=new Post();
			$this->cat_model=new Category();
		}
		function list0(){
			$posts=$this->post_model->list0();
			include('views/post/list0.php');
		}
		function add(){
			$categories=$this->cat_model->list0();
		
			include('views/post/add.php');
		}
		function edit(){

			$id=$_GET['id'];
			$post=$this->post_model->find($id);
			$categories=$this->cat_model->list0();
			include('views/post/edit.php');
		}
		function delete(){

			$id=$_GET['id'];

			$status=$this->post_model->delete($id);

			if ($status==1) {
				setcookie('msg_s','Delete success !!!',time()+10);
			}else{
				setcookie('msg_f','Delete failed !!!',time()+10);
			}
			header('Location: ?mod=post&&act=list0');
			
		}

		function update(){
			$data=$_POST;
			$id=$_GET['id'];
			$status=$this->post_model->update($data,$id);

			if ($status==1) {
				setcookie('msg_s','Edit new success !!!',time()+10);
			}else{
				setcookie('msg_f','Edit new failed !!!',time()+10);
			}
			header('Location: ?mod=post&&act=list0');
			
		}
		function store(){
			$data=$_POST;

			$status=$this->post_model->insert($data);

			if ($status==1) {
				setcookie('msg_s','Add new success !!!',time()+10);
			}else{
				setcookie('msg_f','Add new failed !!!',time()+10);
			}
			header('Location: ?mod=post&&act=list0');
		}

		function detail(){
			$id=$_GET['id'];
			$post=$this->post_model->find($id);
			require_once('views/Post/detail.php');

		} 
	}
?>