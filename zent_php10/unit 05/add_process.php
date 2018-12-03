<meta charset="utf-8">
<?php 
	session_start();
	// Nếu button submit có name = 'submit' thì phải xóa cái post submit này đi:
	unset($_POST['submit']);

	// Bước 1: Chuẩn hóa dữ liệu gửi lên session
		$student = $_POST;
		echo "<pre>";
			print_r($student);
		echo "</pre>";
	// Bước 2: Đưa dữ liệu vào session
		// Khởi tạo session:
		$_SESSION['student'][$student['mssv']] = $student;
		// Kiểm tra session vừa lưu:
		echo "<pre>";
			print_r($_SESSION['student']);
		echo "</pre>";
	// Bước 3: Đẩy thông tin sang list.php 
		header('Location: list.php')
 ?>