<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cart</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<div>
			<h3  class="text-center text-uppercase">Thông tin giỏ hàng</h3>
			<div class="text-right">
				<a href="index.php" title="" class="btn btn-info">Buy more</a>
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
					<th class="text-center">Amount</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($_SESSION['cart'])):  
				$sum = 0;
				?>
				<?php foreach ($_SESSION['cart'] as $key => $product) { 
					$sum+=$product['price']*$product['quantity'];
					?>
					
					<tr>
						<td class="text-center"><?php echo $key ?></td>
						<td><?php echo $product['name'] ?></td>
						<td><?php echo $product['color'] ?></td>
						<td class="text-center">
							<a href="add2cart.php?code=<?php echo $key; ?>" title="" type='button' class="btn btn-success">+</a>
							<?php echo $product['quantity'] ?>
							<a href="delete.php?code=<?php echo $key; ?>" title="" type='button' class="btn btn-warning">-</a>
						</td>
						<td class="text-right"><?php echo number_format($product['price']) ?></td>
						<td class="text-right"><?php echo number_format($product['price']*$product['quantity']) ?></td>
						<td class="text-center">
							<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Detail</a>
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
							<a href="delete.php?code=<?php echo 'all '.$key ?>" title="" type="button" class="btn btn-danger">Delete all</a>
						</td>
					</tr>
					<?php } ?>
					<tr class="text-uppercase">
						<td colspan="5" class="text-right"><label for="">Total</label></td>
						<td colspan="1" class="text-right	"><?php echo number_format($sum) ?></td>
						<td colspan="" rowspan="" headers=""></td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</body>
</html>