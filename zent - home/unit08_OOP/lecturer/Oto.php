<?php 
	/**
	* 
	*/
	class Oto 
	{
		var $name;
		var $branch;
		var $color;		
		
		function inTT()
		{
			echo "<br> Name: ".$this->name;
			echo "<br> Branch: ".$this->branch;
			echo "<br> Color: ".$this->color;
		}

		function inTT2()
		{
			echo "JVJHVJ";
		}

	}

	$bmw = new Oto();

	$bmw->name="BMW X6";
	$bmw->branch="BMW";
	$bmw->color="white";

	$bmw->inTT();
	echo "<br><hr>";
	$bmw->inTT2();

?>