<meta charset="utf-8">
<?php 
	
	//1. Lớp - Thuộc tính -  Phương thức
	
	class SinhVien
	{
		// Thuộc tính: mô tả đặc điểm củ đối trượng:
		var $maSV;
		var $tenSV;
		var $lopSV;
		var $emailSV;

		// Phương thức: mô tả hành động của đối tượng
		function denTruong(){
			echo "<br> Sinh Viên đến trường";
		}
		function choiGame(){
			echo "<br> Sinh Viên chơi game giải trí";
		}
		function tinhNguyen(){
			echo "<br> Sinh viên tham gia tình nguyện";
		}
		function inTT(){
			echo "<br> ----------------------------------------------------------------";;
			echo "<br> ------------- THÔNG TIN SINH VIÊN--------------------";
			echo "<br> -----------------------------------------------------------------";;
			echo "<br> MSSV: ".$this->maSV;
			echo "<br> Họ và tên: ".$this->tenSV;
			echo "<br> Lớp: ".$this->lopSV;
			echo "<br> Email: ".$this->emailSV;
		}
	}

	// Khởi tạo đối tượng từ lớp có sẵn:
		$zon = new SinhVien();
	// Gọi đến thuộc tính hoặc phương thức của đối tượng:
		$zon -> denTruong();
		$zon -> maSV = "20156275";
		$zon -> tenSV = "Phương Trần";
		$zon -> lopSV = "CN CNTT01.K60";
		$zon -> emailSV = "phuong.tt.hust@gmail.com";

		echo "<br> Hello".$zon->tenSV;
		echo "<br> -----------------------------------------------------------------";
		echo "<br> -------- THÔNG TIN SINH VIÊN-------";
		echo "<br> -----------------------------------------------------------------";
		echo "<br> MSSV: ".$zon->maSV;
		echo "<br> Họ và tên: ".$zon->tenSV;
		echo "<br> Lớp : ".$zon->lopSV;
		echo "<br> Email : ".$zon->emailSV;


		$ngoc = new SinhVien();
		$ngoc -> denTruong();
		$ngoc -> maSV = "20156276";
		$ngoc -> tenSV = "Lê Thị Ngọc";
		$ngoc -> lopSV = "Môi Trường 01.K61";
		$ngoc -> emailSV = "ngoc.lt.hust@gmail.com";

		$ngoc->inTT();

	//2. Tính kế thừa: 
		class People 
		{
			var $name;
			var $phone;
			var $email;
			var $birth;
			var $addr;
			function inTT()
			{
				echo "<br> -----------------------------------------------------------------";
				echo "<br> ---------------- THÔNG TIN --------------";
				echo "<br> -----------------------------------------------------------------";
				echo "<br> Name: ".$this->name;
				echo "<br> Phone ".$this->phone;
				echo "<br> Email: ".$this->email;
				echo "<br> Birthday: ".$this->birth;
				echo "<br> Address: ".$this->addr;
			}

			function kiemTien(){
				echo "<br> -----------------------------------------------------------------";
				echo "<br> Giám đốc công ty TNHH một thành viên FA ";
				echo "<br> -----------------------------------------------------------------";
			}
		}
		
		class SinhVien2 extends People
		{
			var $maSV2;
			var $lopSV2;
			function relax(){
				echo "<br> -----------------------------------------------------------------";
				echo "<br> ".$this->name." is playing game";
				echo "<br> -----------------------------------------------------------------";
			}
			//Phương thức khởi tạo: trùng tên lớp or __construct -> ưu tiên __construct:
			function SinhVien2(){
				echo "<br> Phương thức khởi tạo mặc định trùng tên lớp";
			}
			function __construct(){
				echo "<br> Phương thức khởi tạo mặc định __construct";
			}

			// Ghi đè phương thức:
			function inTT()
			{
				parent::inTT();
				echo "<br> Code: ".$this->maSV2;
				echo "<br> Class: ".$this->lopSV2;
			}

			function kiemTien(){
				parent::kiemTien();
				echo "<br> Kiêm Chủ tịch hội đồng quản trị";
				echo "<br> -----------------------------------------------------------------";
			}
		}

		$luong = new SinhVien2;
		$luong->name = "Vu Hien Luong";
		$luong->phone="0973653820";
		$luong->email="luong.vh@gmail.com";
		$luong->birth="21/10/1997";
		$luong->addr="Thái Bình";
		$luong->maSV2="20156275";
		$luong->lopSV2="CN CNTT 01.K60";

		$luong->inTT();
		$luong->relax();
		$luong->kiemTien();

		// Lưu đối tượng vào session:
		session_start();
		$_SESSION['ngoc'] = $ngoc;
		$ngoc_sess = $_SESSION['ngoc'];
		echo "<br> ---------------------------------------------------------------------------------------";
		echo "<br>";
		echo "Name: ".$ngoc_sess->tenSV;
		var_dump($ngoc_sess);
		echo "<br> ---------------------------------------------------------------------------------------";

		// snipet +sublimetext
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
 ?>