<?php 
	session_start();
	$products = array(
		'SP01' => array(
			'id' => 'SP01',
			'name' => 'T-shirt Koben',
			'quantity' => 200,
			'price' => 400000,
		),
		'SP02' => array(
			'id' => 'SP02',
			'name' => 'Quần Box-Pant',
			'quantity' => 120,
			'price' => 450000,
		),
		'SP03' => array(
			'id' => 'SP03',
			'name' => 'T-shirt Zan',
			'quantity' => 200,
			'price' => 1000000,
		),
		'SP04' => array(
			'id' => 'SP04',
			'name' => 'Jean VT',
			'quantity' => 30,
			'price' => 350000,
		),
		'SP05' => array(
			'id' => 'SP05',
			'name' => 'Giày GD888',
			'quantity' => 50,
			'price' => 860000,
		),
	);
	$_SESSION['products'] = $products;
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
		<h3 class="text-center text-uppercase">Danh mục sản phẩm</h3>
		<div class="text-right">
			<a type="button" class="btn btn-warning" name="cart" href="cart.php">Cart</a>
		</div>		
		<table class="table table-hover table-info">
			<thead>
				<tr>
					<th  class="text-center">No.</th>
					<th  >Mã sản phẩm</th>
					<th  >Tên sản phẩm</th>
					<th  class="text-center">Đơn giá</th>
					<th  class="text-center">Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php if(count($products)>0){ ?>
				<?php $count=1; ?>
				<?php foreach ($products as $product) { ?>
				<tr>
					<td  class="text-center"><?php echo $count++; ?></td>
					<td><?php echo $product['id'] ?></td>
					<td><?php echo $product['name'] ?></td>
					<td class="text-right"><?php echo number_format($product['price']) ?></td>
					<td class="text-center">
						<a class="btn btn-success" name="add2cart" href="add.php?id=<?php echo $product['id'] ?>" >Add to cart</a>
						<a class="btn btn-success" name="" href="" >Detail</a>
					</td>
					
				</tr>
				<?php } ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>