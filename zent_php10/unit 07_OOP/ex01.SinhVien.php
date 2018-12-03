<?php 
	include_once('ex01.Nguoi.php');
	class Student extends Person
	{
		var $id;
		var $class;
		var $cpa;
		var $email;
		var $phone;
		function inTT()
		{
			parent::inTT();
			echo "<br> ID: ".$this->id;
			echo "<br> Class: ".$this->class;
			echo "<br> CPA: ".$this->cpa;
			echo "<br> Email: ".$this->email;
			echo "<br> Phone: ".$this->phone;
			echo "<br> -----------------------------------------------------------------";

		}
	}
 ?>