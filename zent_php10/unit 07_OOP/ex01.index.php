<meta charset="utf-8">
<?php 
	include_once('ex01.SinhVien.php');
	$zon = new Student();
	$zon->name = "Tran Thi Phuong";
	$zon->phone="0973653820";
	$zon->email="20156275@student.hust.edu.vn";
	$zon->birth="23/10/1997";
	$zon->addr="Bac Giang";
	$zon->id="20156275";
	$zon->class="CN CNTT 01.K60"; 
	$zon->gender="Nữ";
	$zon->cpa = "4.0";

	$zon->inTT();
 ?>