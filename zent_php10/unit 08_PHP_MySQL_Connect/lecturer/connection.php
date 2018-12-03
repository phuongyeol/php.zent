<?php 
// Thông số kết nối CSDL
	$servername = "localhost"; //255.123.45.13 -> khi CSDL và server không trên cùng 1 máy, phải sử dụng địa chỉ ip tĩnh
	$username = "root"; //tên đăng nhập
	$password="root"; 
	$dbname="zent_table"; //tên CSDL muốn kết nối

	// tạo ra kết nối đến CSDL connection
	$conn= new mysqli($servername,$username,$password,$dbname);

	$conn->set_charset("utf8"); // đọc DL tiếng việt

	//check connection
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
?>