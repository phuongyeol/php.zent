<?php 
/**
* 
*/
include_once 'models/Staff.php';
class StaffController 
{
	public $model;
	function __construct()
	{
		$this->model = new Staff();
	}
}

 ?>