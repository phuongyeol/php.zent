<!-- Xây dựng lớp cha Model chứa một số phương thức cha: 
	getAll(): Lấy tất cả bản ghi từ bảng
	find($id): Tìm kiếm bản ghi theo id 
	insert($data): Thêm bản ghi vào CSDL
	update($data,$id): Cập nhật bản ghi theo id
	delete($id): Xóa bản ghi theo id
	check_exit($data): kiểm tra sự tồn tại của bản ghi 
 -->

 <?php 
 	include_once('models/Connection.php');
 	class Model
 	{
 		public $conn;
 		public $table;
 		public $primary_key = 'id';

 		//1. Phương thức khởi tạo: 
 		function __construct()
 		{
 			$connection = new Connection();
 			$this->conn = $connection->conn;
 		}

 		//2. getAll(): Lấy tất cả bản ghi từ bảng:
 		public function getAll()
		{
			$query = "SELECT * FROM ".$this->table;

			$result = $this->conn->query($query);

			$data = array();

			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}

			return $data;
		}

		//3. find($id): TÌm kiếm bản ghi theo id:
		public function find_by_id($id)
		{
			$sql = "SELECT * FROM".$this->table."WHERE".$this->primary_key."='".$id."'";
			$result = $this->conn->query($sql);
			return $result->fetch_assoc();
		}

		//4. insert($data): Thêm bản ghi:
		public function insert($data)
		{
			$field="";
			$values="";
			foreach ($data as $key => $value) {
				$field .= $key.",";
				$values .= "'".$value."',";
			}
			// xử lý chuỗi: cắt dấu phẩy cuối cùng
			$field = trim($field, ',');
			$values = trim($values, ',');

			$sql = "INSERT INTO ".$this->table.' ('.$field.') VALUES ('.$values.')';
			
			return $this->conn->query($sql);
		}

		//5. update($data,$id): Cập nhật bản ghi:
		public function update($data, $id)
		{
			$set = "";
			foreach ($data as $key => $value) {
				$set .= $key."="."'".$value."',";
			}
			$set = trim($set,',');
			$sql = "UPDATE".$this->table."SET".$set."WHERE".$this->primary_key."=".$id;
			return $this->conn->query($sql);
		}

		//6. delete($id): Xóa bản ghi
		public function delete($id)
		{
			$sql = "DELETE FROM".$this->table."WHERE".$this->primary_key."=".$id;
			return $this->conn->query($sql);
		}

		//7. check_exits($data): Kiểm tra sự tồn tại của bản ghi
		public function check_exist($data)
		{
			$condition = '';
			foreach ($data as $key => $value) {
				$condition.= $key." = '".$value."' and ";
			}
			$condition = substr($condition, 0, strlen($condition)-5);
			$sql = "SELECT * FROM ".$this->table." WHERE ".$condition;
	
			$result = $this->conn->query($sql);
			
			if ($result!=NULL) {
				return $result->fetch_assoc();
			} else {
				return false;
			}
		}
 	}
  ?>