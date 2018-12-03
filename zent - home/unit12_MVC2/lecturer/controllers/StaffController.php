<?php 

	/**
	* 
	*/
	class StaffController 
	{
		
		function __construct()
		{
			echo "----- Staff -----<br>";
		}

		public function list()
		{
			echo "Staff - List";
		}

		public function add()
		{
			echo "Staff - Add";
		}

		public function edit()
		{
			echo "Staff - Edit";
		}

		public function delete()
		{
			echo "Staff - Delete";
		}

		public function Error()
		{
			echo "ERROR";
		}
	}
 ?>