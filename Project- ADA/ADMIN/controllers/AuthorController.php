<?php 
	include_once('models/Author.php');
	class AuthorController{
		var $model;
		function __construct(){
			$this->model=new Author();
		}
		function login(){
			require_once('views/author/login.php');
		}
		function author(){

			$email=$_POST['email'];
			$pass=$_POST['password'];

			$status=$this->model->login($email,$pass);

			if ($status==true) {
				header('Location: ?mod=dashboard&act=index');

			}else{
				setcookie('msg','Email đăng nhập hoặc mật khẩu không chính xác !!!',time()+10);
				header('Location: index.php');
			}
		}
	}
?>