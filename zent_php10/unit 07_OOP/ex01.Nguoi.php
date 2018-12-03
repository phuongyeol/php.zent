<?php 
	class Person
	{
		var $name;
		var $birth;
		var $addr;
		var $gender;
		function inTT(){
			echo "<br> -----------------------------------------------------------------";
			echo "<br> ------------------------ THÔNG TIN -----------------------";
			echo "<br> -----------------------------------------------------------------";
			echo "<br> Name: ".$this->name;
			echo "<br> Birthday: ".$this->birth;
			echo "<br> Address: ".$this->addr;
			echo "<br> Gender: ".$this->gender;

		}
	}
 ?>