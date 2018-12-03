<?php 
session_start();
	// session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GIỎ HÀNG</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" >
		$(function(){
			setTimeout(function(){
				$(".alert-success").hide();
			}, 3000);
		});
	</script>
</head>
<body>
	
	<div class="container">
		<?php if(isset($_COOKIE['them'])): ?>
			<div class="alert alert-success">
				<strong>Info!</strong> <?php echo $_COOKIE['them'] ?>
			</div>
		<?php endif; ?>
		<?php if(isset($_COOKIE['xoa'])): ?>
			<div class="alert alert-success">
				<strong>Info!</strong> <?php echo $_COOKIE['xoa'] ?>
			</div>
		<?php endif; ?>
		<h3 class="text-center text-uppercase">Danh sách Giỏ hàng</h3>
		<div class="text-right">
			<a type="button" class="btn btn-info" href="index.php" >Buy more</a>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="text-center">Mã SP</th>
					<th class="text-center">Tên SP</th>
					<th class="text-center">Màu sắc</th>
					<th class="text-center">Số lượng</th>
					<th class="text-center">Đơn giá</th>
					<th class="text-center">Thành tiền</th>
					<th class="text-center">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($_SESSION['cart'])): ?>
					<?php $sum = 0; ?>
					<?php foreach ($_SESSION['cart'] as $key => $product) { ?>

					<tr>
						<td class="text-center"><?php echo $key ?></td>
						<td class="text-center"><?php echo $product['name'] ?></td>
						<td class="text-center"><?php echo $product['color'] ?></td>
						<td class="text-right">
							<a type="button" class="btn btn-warning" href="add_to_cart.php?id=<?php echo $key ?>">+</a>
							<?php echo number_format($product['quantity']) ?>
							<a type="button" class="btn btn-warning" href="delete_one.php?id=<?php echo $key ?>">-</a>
						</td>

						<td class="text-right"><?php echo number_format($product['price']) ?></td>
						<?php  
						$thanh_tien = $product['quantity']*$product['price'];
						$sum+=$thanh_tien;
						?>
						
						<td class="text-right"><?php echo number_format($thanh_tien) ?></td>
						<td class="text-center">
							<a type="button" class="btn btn-success" href="detail.php?id=<?php echo $key ?>" >Detail</a>
							<a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $key ?>">Delete</a>
							<a type="button" class="btn btn-primary" href="add_to_cart.php?id=<?php echo $key ?>">Increase</a>
						</td>

					</tr>	
					<?php } ?>	

					<tr>
						<td colspan="5" rowspan="" headers="" class="text-uppercase text-center"><h4>Tổng tiền</h4></td>
						<td colspan="2" rowspan="" headers=""><h4><?php echo number_format($sum) ?></h4></td>
					</tr>
				<?php endif;?>			
			</tbody>
		</table>
	</div>
</body>
</html>