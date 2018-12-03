<meta charset="utf-8">
<?php 
	// Sesion và cookie dùng để lưu trữ dữ liệu tạm thời, từ đó đưa ra những quyết định về quyền hạn hoặc những tùy chọn riêng tư
	 // Session: lưu trữ dữ liệu trên Server và đồng thời nó sẽ có một đoạn code dữ liệu được lưu trữ ở client (cookie). Mỗi client sẽ có một ID session riêng 
	 // Session: thường để lưu thông tin đăng nhập, giỏ hàng, dữ liệu tạm thời,...
	

	//1. Đăng kí phiên làm việc SESSION:
		session_start(); // bắt buộc
	//2. Lưu dữ liệu vào SESSION: 
		echo 'Tất cả session được lưu trữ trong biến toàn cục $_SESSION. Thao tác dữ liệu của session trên biến này ';
		// Cú pháp:
		$session_value = '$session_value';
		$_SESSION['session_name'] = $session_value;
		// Ví dụ: 
		$_SESSION['zent_name'] = "ZENT GROUP"; // gán chuỗi ZENT GROUP cho session zent_name;

		$info = array();
		$info['name'] = "Phương ZonZon";
		$info['phone'] = "0973653820";
		$info['email'] = "phuongtran.00.k60@gmail.com";

		// $_SESSION['info'] = $info;

	//3. Đọc dữ liệu trong SESSION:
		echo "<pre>";
			print_r($_SESSION);
		echo "</pre>";

	//4. In nội dung của session:
		if (isset($_SESSION['zent_name'])) {
			echo $_SESSION['zent_name'];
		}
		if (isset($_SESSION['info'])) {
			echo "<br>- Họ và tên: ".$_SESSION['info']['name'];
			echo "<br>- Số điện thoại: ".$_SESSION['info']['phone'];
			echo "<br>- Email: ".$_SESSION['info']['email'];
		}

	// 5. Xóa một session:
		unset($_SESSION['session_name']); // xóa một session
		session_destroy(); // Xóa toàn bộ session
		echo "<pre>";
			print_r($_SESSION);
		echo "</pre>";
 ?>