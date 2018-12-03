<?php 
	session_start();
	if (isset($_SESSION['buy'])) {
		# code...
		$cart = $_SESSION['buy'];
	} else {
		$cart = array();
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
	<link rel="icon" href="./css/font-awesome.css">
</head>
<body>
	<div class="container">

		
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th colspan="5"></th>
					<th colspan="1" class="text-center">
						<a href="products.php" title="" class="btn-success btn">Mua tiếp</a>
					</th>	
				</tr>
				<tr>
					<th colspan="6" rowspan="" headers="" scope="">
						<h3 class="text-center text-uppercase">Thông tin giỏ hàng</h3>
					</th>
				</tr>
				<tr>
					<td class="text-center" style="font-weight: bold;">ID</td>
					<td class="text-center" style="font-weight: bold;">Tên sản phẩm</td>
					<td class="text-center" style="font-weight: bold;">Số lượng</td>
					<td class="text-center" style="font-weight: bold;">Đơn giá</td>
					<td class="text-center" style="font-weight: bold;">Thành tiền</td>
					<td class="text-center" style="font-weight: bold;">Thao tác</td>
				</tr>
			</thead>
			<tbody>
				<?php $sum = 0; ?>
				<?php foreach ($cart as $key => $product): ?>
				<?php $sum+=$product['thanh_tien'] ?>			
				<tr>
					<td class="text-center"><?php echo $product['id'] ?></td>
					<td><?php echo $product['name']?></td>
					<td class="text-center"><?php echo $product['quantity'] ?></td>
					<td class="text-right"><?php echo number_format($product['price']) ?></td>
					<td class="text-right"><?php echo number_format($product['thanh_tien']) ?></td>
					<td class="text-center">
						
						<a href="delete.php?id=<?php echo $product['id'] ?>"  class="btn-danger btn">Xóa khỏi giỏ hàng</a>
					</td>
				</tr>
				<?php endforeach ?>
				<tr>
					<td colspan="4" class="text-center">Tổng tiền</td>
					<td colspan="1" class="text-center">
						<?php echo number_format($sum) ?>
					</td>
					<td colspan="1" class="text-center">
						<a href="" title="" class="btn-success btn">Thanh toán</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>