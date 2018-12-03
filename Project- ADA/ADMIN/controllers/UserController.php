<?php 
	/**
	* 
	*/
	include('models/User.php');
	class UserController{
		var $user_model;
		function __construct(){
			$this->user_model = new User();
		}
		function list0(){
			
			$users=$this->user_model->list0();
			include('views/user/list0.php');
		}
		function add(){
			include('views/user/add.php');
		}
		function edit(){

			$id=$_GET['id'];
			$user=$this->user_model->find($id);

			include('views/user/edit.php');
		}
		function delete(){

			$id=$_GET['id'];

			$status=$this->user_model->delete($id);

			if ($status==1) {
				setcookie('msg_s','Delete success !!!',time()+10);
			}else{
				setcookie('msg_f','Delete failed !!!',time()+10);
			}
			header('Location: ?mod=user&&act=list0');
			
		}

		function update(){
			$data=$_POST;
			$id=$_GET['id'];
			$status=$this->user_model->update($data,$id);

			if ($status==1) {
				setcookie('msg_s','Edit new success !!!',time()+10);
			}else{
				setcookie('msg_f','Edit new failed !!!',time()+10);
			}
			header('Location: ?mod=user&&act=list0');
			
		}
		function store(){
			$data=$_POST;

			$status=$this->user_model->insert($data);

			if ($status==1) {
				setcookie('msg_s','Add new success !!!',time()+10);
			}else{
				setcookie('msg_f','Add new failed !!!',time()+10);
			}
			header('Location: ?mod=user&&act=list0');
		}

		function detail(){
			$id=$_GET['id'];
			$user=$this->user_model->find($id);
			require_once('views/user/detail.php');

		}
	}
?>