<!-- Lớp News xử lý các vấn đền truy vấn CSDL với bảng news -->
<?php 
	include_once('models/Connection.php');
	include_once('models/Model.php');

	class News extends Model
	{
		public $table = 'news';
		function getAll()
		{
			parent::getAll();
		}

		function insert($data)
		{
			$data = $this->data;
			parent::insert($data);
		}

		function update($data,$id)
		{
			parent::update($this->$data,$this->id);
		}

		function delete($id)
		{
			parent::delete($this->id);
		}

	}
 ?>