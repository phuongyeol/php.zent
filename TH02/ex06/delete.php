<?php 
	include_once('connection_funct');
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}else{
		header('Location: index.php');
	}
	// Câu lệnh truy vấn cơ sở dữ liệu:
	$query = "DELETE FROM news WHERE id=."$id;
	// Thực thi câu lệnh truy vấn cơ sở dữ liệu:
	$result = $conn->query($query);
	if ($result ==true) {
			echo "Xóa bài viết thành công";
	}	
 ?>

<!-- Tạo trang quản lý người dùng: 
	// Bước 1: tính số lượng bài viết > số lượng page
	Select count(*) from news // sum(post);
	sum(post)/$numb = $sum(page);
	// Bước 2: Viết vòng lặp chạy từ page 1 > page n
if(isset($_GET['p'])){
	$p = $_GET['p'];
}
$numb = 3 
$start = ($p-1)*5
Select * from news LIMIT 0, $numb // trang 1 có 5 bài post, bắt đầu từ post 0
Tính -->