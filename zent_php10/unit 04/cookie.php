<meta charset="utf-8">
<?php 
	// Cookie: thuownwfng dùng để lưu trữ các tùy chọn riêng của trang web từng user, nó là một file nhỏ được Server chỉ định lưu trữ trên máy tính của client và php có thể truy xuất tới được
	// Để sử dụng cookie thì trình duyệt phải hỗ trợ chức năng này: nếu không Cookie sẽ trở nên vô dụng
	// Cookie phụ thuộc vào thời gian sống mà bạn thiết lập. 

	//1. Lưu trữ cookie: đặt cú pháp trước thẻ html:
		$name = 'name_cookie';
		$value = 'Login - Đăng nhập';
		$expire = time()+20;
		setcookie($name, $value, $expire);
	//2. Lấy giá trị cookie đã lưu: 
		echo 'Tất cả cookie được lưu trữ trong biến toàn cục $_COOKIE nên để lấy giá trị cookie ta dùng biến $_COOKIE[\'cookie_name\'] ';

		if (isset($_COOKIE['name_cookie'])) {
			echo "<br>".$_COOKIE['name_cookie'];
		}else {
			echo "<br> Không tồn tại cookie này";
		}

	//3. Hủy Cookie: Thiết lập thời gian sống của nó sang giá trị âm nhiều hơn hoặc bằng giá trị sống lúc bạn thiết lập 
		setcookie($name, $value, time()-50);
		if (isset($_COOKIE[$name])) {
			echo "<br>".$_COOKIE[$name];
		}else {
			echo "<br> Cookie này đã bị hủy";
		}
 ?>