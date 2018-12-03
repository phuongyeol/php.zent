<?php 
	// Tạo danh sách sản phẩm với array, lưu vào session để tiện dùng đến trong các file:
	session_start();
	$_SESSION['products'] =  array(
								'SP01' => array(
										'CODE' => 'SP01',
										'NAME' => 'IP X',
										'PRICE' => '30000000',
										'QUANTITY' => '100',
								),
								'SP02' => array(
										'CODE' => 'SP02',
										'NAME' => 'IP 8',
										'PRICE' => '25000000',
										'QUANTITY' => '200',
								),
								'SP03' => array(
										'CODE' => 'SP03',
										'NAME' => 'IP 7',
										'PRICE' => '20000000',
										'QUANTITY' => '500',
								),
	);
	$products = $_SESSION['products'];
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
		
	<h3 class="text-uppercase text-center">PRODUCT LIST</h3>
		<div class="text-left">
			<a href="3.yourcart.php" class="btn btn-danger">Your Cart</a>
		</div>
		<table class="table table-bordered">
			<thread>
				<tr>
					<th >CODE</th>
					<th >NAME</th>
					<th >PRICE</th>
					<th >QUATITY</th>
					<th >ACTION</th>
				</tr>
			</thread>
			<tbody>
				<!-- Đưa dữ liệu vào từng dòng -->
				<?php foreach ($products as $products) { ?>
					<tr>
						<th><?php echo $products['CODE']; ?></th>
						<th><?php echo $products['NAME']; ?></th>
						<th><?php echo $products['PRICE']; ?></th>
						<th><?php echo $products['QUANTITY']; ?></th>
						<th> 
							<a href="2.addToCart.php?code=<?php echo $products['CODE']; ?>" class="btn btn-info">Add to Cart</a> 
					</tr>
				<?php } ?>
			</tbody>
		</table>
		
		
	</div>
</body>
</html>