<?php 
	/**
	* 
	*/
	class Nguoi 
	{
		var $ten;
		function ngu()
		{
			echo "<br> Sleep";
		}

		function __construct()
		{
			echo "<br> Cry !";
		}
	}

	$anh=new Nguoi();
	
	$anh->ngu();
?>