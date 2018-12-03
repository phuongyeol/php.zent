<?php 
	/**
	* 
	*/
	class Student extends Person
	{
		var $id;
		var $class;
		var $school;
		var $phone;
		var $email;

		function __construct()
		{
			parent::__construct();
		}

		function printInfo()
		{
			parent::printInfo();
			echo "<br>ID: ".$this->id;
			echo "<br>Class: ".$this->class;
			echo "<br>School: ".$this->school;
			echo "<br>Phone: ".$this->phone;
			echo "<br>Email: ".$this->email;
		}
	}

?>