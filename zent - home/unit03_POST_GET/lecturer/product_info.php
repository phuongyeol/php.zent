<?php 
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$id = $_POST['id'];
		$cost = $_POST['cost'];
		$count = $_POST['count'];
		
		echo "Thong tin san pham vua nhap: "."<br/>";
		echo "Ten SP: ".$name."<br/>";
		echo "Ma SP: ".$id."<br/>";
		echo "Gia SP: ".$cost."<br/>";
		echo "So luong SP: ".$count."<br/>";
		
		
	}
?>
