<?php 
session_start();
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	if (isset($_SESSION['product_list'])) {
		$item_info = $_SESSION['product_list'][$id];
	}		
} else {
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		
		<table class="table table-hover">
			<legend>Thông tin sản phẩm</legend>

			<tbody>
				<a class="btn btn-success" href="cart.php" role="button">Back</a>
				<tr>
					<td><label for="">Mã SP</label></td>
					<td><?php echo $id ?></td>
				</tr>
				<tr>
					<td><label for="">Tên SP</label></td>
					<td><?php echo $item_info['name'] ?></td>
				</tr>
				<tr>
					<td><label for="">Màu sắc</label></td>
					<td><?php echo $item_info['color'] ?></td>
				</tr>
				<tr>
					<td><label for="">Số lượng</label></td>
					<td><?php echo $item_info['quantity'] ?></td>
				</tr>
				<tr>
					<td><label for="">Đơn giá</label></td>
					<td><?php echo $item_info['price'] ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>