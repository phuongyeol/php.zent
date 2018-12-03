<?php 
	session_start();
	$products = array(
		'SP01' => array(
			'name' => 'Jean01',
			'color' => 'black',
			'quantity' => 100,
			'price' => 450000,
		),
		'SP02' => array(
			'name' => 'T-shirt 01',
			'color' => 'white',
			'quantity' => 100,
			'price' => 450000,
		),
		'SP03' => array(
			'name' => 'Box-Paint',
			'color' => 'black',
			'quantity' => 10,
			'price' => 680000,
		),
		'SP04' => array(
			'name' => 'Jean Jx',
			'color' => 'black',
			'quantity' => 20,
			'price' => 540000,
		),
	);

	$_SESSION['product_list']= $products;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SHOP</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
</head>
<body>
	
	<div class="container">
		
		<h3 class="text-center text-uppercase">Danh sách sản phẩm</h3>
		<div class="text-right">
			<a type="button" class="btn btn-info" href="cart.php" >Cart</a>
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="text-center">Mã SP</th>
					<th class="text-center">Tên SP</th>
					<th class="text-center">Màu sắc</th>
					<th class="text-center">Số lượng</th>
					<th class="text-center">Đơn giá</th>
					<th class="text-center">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $key => $product) { ?>
				<tr>
					<td class="text-center"><?php echo $key ?></td>
					<td class="text-center"><?php echo $product['name'] ?></td>
					<td class="text-center"><?php echo $product['color'] ?></td>
					<td class="text-right">
						
						<?php echo number_format($product['quantity']) ?>
						
					</td>
					<td class="text-right"><?php echo number_format($product['price']) ?></td>
					<td class="text-center">
						<a type="button" class="btn btn-success" href="detail.php?id=<?php echo $key ?>" >Detail</a>
						<a type="button" class="btn btn-warning" href="add_to_cart.php?id=<?php echo $key ?>">Add to cart</a>
					</td>
				</tr>	
				<?php } ?>				
			</tbody>
		</table>
	</div>
</body>
</html>