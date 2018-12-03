<?php 
	/**
	* 
	*/
	class DongVat 
	{
		
		var $ten;
		var $trong_luong;
		var $mau;

		function an()
		{
			echo "<br> Dong vat an!";
		}

		function ngu()
		{
			echo "<br> Dong vat ngu!";
		}
	}


	/**
	* 
	*/
	class Ca extends DongVat
	{

		var $loai;

		function boi()
		{
			echo "<br> Dong vat boi!";
		}
		
	}

	$caThu = new Ca();
	$caThu->ngu();
	$caThu->boi();
?>