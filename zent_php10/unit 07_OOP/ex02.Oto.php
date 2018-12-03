<meta charset="utf-8">
<?php 
	class Car{

		// Thuộc tính: 
		var $id;
		var $name;
		var $color;
		var $price;

		// Phương thức: 
		function run()
		{	
			echo "<br>-----------------------------------------------------------------------------";
			echo "<br> Đây là phương thức chạy của lớp";
		}

		function info(){
			echo "<br>-----------------------------------------------------------------------------";

			//$this: truy cập đến thuộc tính, phương thức trong phạm vi, ngữ cảnh hiện tại
			echo "<br> Mã xe: ".$this->id;
			echo "<br> Tên xe: ".$this->name;
			echo "<br> Màu xe: ".$this->color;
			echo "<br> Giá: ".$this->price;
		}

		function getFullFunction(){
			echo "<br>-----------------------------------------------------------------------------";

			echo "<br> Đây là phương thức gọi đến tất cả phương thức của lớp";
			$this->run();
			$this->info();
		}
	}

	// Khởi tạo đối tượng:
	$car1 = new Car();

	// Gán giá trị cho thuộc tính:
	$car1->id = "AD001";
	$car1->name = "Audi Q7";
	$car1->color = "Black";
	$car1->price = "500 000 000";

	// Gọi thuộc tính và phương thức: 
	$car1->run();
	$car1->info();
	$car1->getFullFunction();

	// Tính kế thừa trong PHP OOP: 
	class OtoTai extends Car
	{
		var $trongluongtai;
		// Code
		// Viết lại phương thức:
		function info(){
			parent::info();
			echo "<br> Trọng lượng tải: ".$this->trongluongtai;
		}
	}
	$otoTai1 = new OtoTai();
	$otoTai1->id = "OTT001";
	$otoTai1->name = "Ô tô tải 12 tấn";
	$otoTai1->color = "white"; 
	$otoTai1->price = "2 bilion";
	$otoTai1->trongluongtai = "12 Tấn";
	$otoTai1->getFullFunction();





 ?>