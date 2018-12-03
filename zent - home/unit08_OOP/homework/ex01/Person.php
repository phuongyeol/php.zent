<?php 

	/**
	* 
	*/
	class Person 
	{
		var $name;
		var $date_of_birth;
		var $country;
		var $gender;

		function __construct()
		{
			
		}

		function printInfo()
		{
			echo "<h3>Student Information</h3><hr>";
			echo "<br>Full name: ".$this->name;
			echo "<br>Date of birth: ".$this->date_of_birth;
			echo "<br>Country: ".$this->country;
			echo "<br>Gender: ".$this->gender;
		}
	}
?>