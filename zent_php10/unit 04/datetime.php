<meta charset="utf-8">
<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo "<br> Định dạng với hàm time() - tra về kiểu int: ".time();
	echo "<br> Định dạng với hàm date(): ".date('H:i:s - d/m/Y');

	//Định dạng trong mysql: 
	$time_created = date('d-m-Y H:i:s');
	echo "<br>".$time_created;
	// Chuyển thời gian sang kiểu int:
	echo "<br>".strtotime(date('2018-4-5 19:31:20'));
	// Cộng trừ ngày tháng:
	$date_int = mktime(0,0,0,4,(15+5), 2018);
	echo "<br> 15 ngày nữa: ".date('d/m/Y', $date_int);

?>