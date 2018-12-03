<?php 
	class Nguoi{
		var $name;
		var $birth;
		var $addr;
		var $gender;
		function inThongTin()
		{
			//code
			echo "<br> ------------------------------------------------------------------";
			echo "<br> ------------------THÔNG TIN SINH VIÊN----------------";
			echo "<br> &emsp; Name: ".$this->name;
			echo "<br> &emsp; Birthday: ".$this->birth;
			echo "<br> &emsp; Address: ".$this->addr;
			echo "<br> &emsp; Gender: ".$this->gender;
		}

	}
	class Sinhvien extends Nguoi{
		var $code;
		var $class;
		var $cpa;
		var $email;
		var $phone;
		function inThongtin()
		{
			// Từ khóa PARENT - gọi lại hàm từ lớp cha
			parent::inThongtin();
			// Tiếp tục in các thông tin mới
			echo "<br> &emsp; Code: ".$this->code; 
			echo "<br> &emsp; Class: ".$this->class;
			echo "<br> &emsp; CPA: ".$this->cpa;
			echo "<br> &emsp; Email: ".$this->email;
			echo "<br> &emsp; Phone: ".$this->phone;
			echo "<br> ------------------------------------------------------------------";
		}
	}
 ?>