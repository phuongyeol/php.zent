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
	'SP05' => array(
		'name' => 'Watch ADL',
		'color' => 'black',
		'quantity' => 20,
		'price' => 130000000,
	),
	'SP06' => array(
		'name' => 'Watch Jx',
		'color' => 'black',
		'quantity' => 13,
		'price' => 5400000,
	),
);

$_SESSION['product_list']= $products;


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
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div >
			<h3 class="text-uppercase text-center">Danh sách sản phẩm</h3>
			<div class="text-right">
				<a href="cart.php" title="" type="button" class="btn btn-info">Your Cart</a>
			</div>
			
		</div>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="text-center">Code</th>
					<th class="text-center">Name</th>
					<th class="text-center">Color</th>
					<th class="text-center">Quantity</th>
					<th class="text-center">Price</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($_SESSION['product_list'] as $key => $product) { ?>

				<tr>
					<td class="text-center"><?php echo $key ?></td>
					<td><?php echo $product['name'] ?></td>
					<td class="text-center"><?php echo $product['color'] ?></td>
					<td class="text-right">
						
						<?php echo number_format($product['quantity']) ?>

					</td>
					<td class="text-right"><?php echo number_format($product['price']) ?></td>
					<td  class="text-center">
						<a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detail</a>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">ABC Mart+</h4>
									</div>
									<div class="modal-body">
										<table class="table table-hover">
											<label for="">Thông tin sản phẩm</label>
											
											<tbody>
												<tr>
													<td><label for="">Code</label></td>
													<td><?php echo $key ?></td>
												</tr>
												<tr>
													<td><label for="">Name</label></td>
													<td><?php echo $product['name'] ?></td>
												</tr>
												<tr>
													<td><label for="">Color</label></td>
													<td><?php echo $product['color'] ?></td>
												</tr>
												<tr>
													<td><label for="">Price</label></td>
													<td><?php echo number_format($product['price']) ?></td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>

							</div>
						</div>
						
						<a href="add2cart.php?code=<?php echo $key ?>" title="" type="button" class="btn btn-success">Add to cart</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>