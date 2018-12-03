<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Them SP</h3>
	<div class="container">
		<form action="product_info.php" method="post" accept-charset="utf-8">
			<label for=""> Tên sản phẩm</label>
			<input type="text" name="name" value="" placeholder="Tên SP">
			<br/>
			<label for=""> Mã sản phẩm</label>
			<input type="text" name="id" value="" placeholder="Mã SP">
			<br/>
			<label for=""> Gía thành</label>
			<input type="number" name="cost" value="" placeholder="Gía thành">
			<br/>
			<label for="">Số lượng</label>
			<input type="number" name="count" value="" placeholder="Số lượng">
			<br/>
			<button type="submit" name="submit" placeholder="Thêm SP" class="btn btn-primary">Add</button>
		</form>
	</div>
</body>
</html>
<?php 
	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$id = $_POST['id'];
		$cost = $_POST['cost'];
		$count = $_POST['count'];
	}
 ?>