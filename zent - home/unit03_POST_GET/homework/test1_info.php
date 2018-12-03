<?php 

	// xử lý trên 2 file khác nhau, nên không cần kiểm tra đã click submit chưa
	// => không cần isset
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$country=$_POST['country'];
		$email=$_POST['email'];

		echo "<h3>Thông tin sinh viên vừa nhập:</h3>";
		echo "Mã số SV: $id"."</br>";
		// echo "Mã số SV: $_POST['id']"."</br>";
		echo "Họ và tên: $name"."</br>";		
		echo "Sđt: $mobile"."</br>";
		echo "Email: $email"."</br>";
		echo "Địa chỉ: $country"."</br>";		
	}
?>