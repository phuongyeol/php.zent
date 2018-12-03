<meta charset="utf-8">
<?php 
	//Gọi đến lớp sinh viên:
	include_once("nguoi.php");
	// Set giá trị cho các thuộc tính
	$SV1 = new Sinhvien();
	$SV1->name = "Trần Thị Phương";
	$SV1->birth = "23/10/1997";
	$SV1->addr = "Bắc Giang";
	$SV1->gender = "Nữ";
	$SV1->code = "20156275";
	$SV1->class = "CN CNTT 01- K60";
	$SV1->cpa = "2.78";
	$SV1->email = "20156275@student.hust.edu.vn";
	$SV1->phone = "0972653820";

	//In thông tin sinh viên vừa thêm:
	$SV1->inThongtin();
 ?>