<?php 
	$servername = "localhost"; // hoặc địa chỉ IP máy chủ chứa CSDL
	$username = "root"; // Tên đăng nhập
	$password = "root";	// Mật khẩu truy cập
	$dbname = "unit09_crud"; // Tên cơ sở dữ liệu muốn kết nối dến

	// Connection: tạo kết nối đến CSDL:
	$conn = new mysqli($servername,$username,$password,$dbname);
	// set utf-8 để đọc dữ liệu Tiếng Việt
	$conn->set_charset("utf8"); 

	// Kiểm tra kết nối:
	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}else{
		echo "Connection Successfull!";
	}
 ?>