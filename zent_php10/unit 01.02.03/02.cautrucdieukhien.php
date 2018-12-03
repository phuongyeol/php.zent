<meta charset="utf-8">
<?php 

// Ví dụ 1: Câu lệnh if else: 
	echo " <br> Ví dụ 1.1: ";
	$number = 10;
	if ($number % 2 ==0) {
		echo "<br> &emsp; $number là số chẵn!";
	}else{
		echo "<br> &emsp; $number là số lẻ!";
	}

	echo "<br> Ví dụ 1.2: ";
	$day = 2;
	if ($day == 2) {
		$day = "Thứ Hai";
	}else if ($day == 3) {
		$day = "Thứ Ba";
	}else if ($day == 4) {
		$day = "Thứ Thứ";
	}else if ($day == 5) {
		$day = "Thứ Năm";
	}else if ($day == 6) {
		$day = "Thứ Sáu";
	}else if ($day == 7) {
		$day = "Thứ Bảy";
	}else if ($day == 8) {
		$day = "Chủ Nhật";
	}else{
		$day = "Không tồn tại ngày trong tuần!" ;
	}
	echo "<br> &emsp; ".$day;
// Ví dụ 2: Câu lệnh switch - case:
	echo "<br> Ví dụ 2.1: ";
	$day = 8;
	switch ($day) {
		case '2':
			$day = "Thứ Hai";
			break;
		case '3':
			$day = "Thứ Ba";
			break;
		case '4':
			$day = "Thứ Tứ";
			break;
		case '5':
			$day = "Thứ Năm";
			break;
		case '6':
			$day = "Thứ Sáu";
			break;
		case '7':
			$day = "Thứ Bảy";
			break;
		case '8':
			$day = "Chủ Nhật";
			break;	
		default:
			$day = "Không tồn tại ngày này trong tuần!";
			break;
	}
	echo "<br> &emsp; ".$day;

 ?>