<?php 
	// Tạo danh sách sản phẩm với array, lưu vào session để tiện dùng đến trong các file:
	session_start();
	
	$products = $_SESSION['cart'];
	// echo "<pre>";
	// 	print_r($products);
	// echo "</pre>";
	
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//CODE.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		
	<h3 class="text-uppercase text-center">YOUR CART</h3>
		<div class="text-left">
			<a href="1.list.php" class="btn btn-danger">Back</a>
		</div>
		<table class="table table-bordered">
			<tdread>
				<tr>
					<td >CODE</td>
					<td >NAME</td>
					<td >PRICE</td>
					<td >QUATITY</td>
					<td >AMOUNT</td>
					<td >ACTION</td>
				</tr>
			</tdread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php 
					$sum = 0;
					foreach ($products as $products) { 
					$sum += ($products['QUANTITY']*$products['PRICE']);
				?>
					<tr>
						<td><?php echo $products['CODE']; ?></td>
						<td><?php echo $products['NAME']; ?></td>
						<td><?php echo number_format($products['PRICE']); ?></td>
						<td><?php echo number_format($products['QUANTITY']); ?></td>
						<td align="right"><?php echo number_format($products['QUANTITY']*$products['PRICE']); ?></td>
						<td> 
							<a href="2.Delete.php?code=<?php echo $products['CODE']; ?>" class="btn btn-info">Delete</a> 
					</tr>
				<?php } ?>
				<tr>
					<td colspan="4">SUM</td>
					
					<td align="right"><?php echo number_format($sum); ?> </td>
					<td></td>

				</tr>
			</tbody>
		</table>
		
		
	</div>
</body>
</html>