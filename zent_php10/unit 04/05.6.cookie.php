<meta charset="utf-8">
<?php 
	// Tạo cookie: 
	setcookie('user', 'admin', time()+20);
	// echo "Time: ".time();
	if (isset($_COOKIE['user'])) {
		echo "user: ".$_COOKIE['user'];
	}
	// Hủy cookie: 
	setcookie('user', 'admin', time()-20);

 ?>