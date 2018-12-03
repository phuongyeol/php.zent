<!-- Xây dựng lớp Connection kêt nối CSDL theo mô hình hướng đối tượng  -->
<?php 
	class Connection{

		public $conn;

		public function __construct() {
			// Thống số kết nối CSDL
			$servername = "localhost"; //255.123.45.13 -> khi CSDL và server không trên cùng 1 máy, phải sử dụng địa chỉ ip tĩnh
			$username = "root"; // Tên đăng nhập
			$password = "root"; // Mật Khẩu
			$dbname = "zent_table"; // Tên CSDL muốn kết nối

			// Tạo ra kêt nối đến CSDL
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			// Đọc DL tiếng việt
			$this->conn->set_charset("utf8");
			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}
	}

 ?>