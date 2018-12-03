<?php 
	function inTT()
	{
		echo "<br><hr/>";
		echo "<br> Name: Trung Anh";
		echo "<br> Old: 20";
		echo "<br> Address: HN";
	}

	// inTT();

	function inTT2($name,$old,$address)
	{
		echo "<br><hr/>";
		echo "<br> Name: ".$name;
		echo "<br> Old: ".$old;
		echo "<br> Address: ".$address;
	}

	// inTT2("Phuong Linh", 20 , "Ha Noi");

	//thuong khong in trong ham, ham chi de xu ly va tra ve kq
	function sumVi($a,$b)
	{
		echo "<br><hr/>";
		echo "SUM: ".($a+$b);
	}

	function sum($a,$b)
	{
		return ($a+$b);
	}
	
	echo "<br><hr> Tong: ".sum(13,13);
	echo "<br><hr> Sum: ".sum(13,13);
?>