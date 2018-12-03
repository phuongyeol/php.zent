<?php include_once 'views/layouts/header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Product Management 
					<span><a href="?mod=product&act=add" title="Add new product" class="fa fa-plus btn btn-warning text-right" ></a></span>
				</h2> 
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
		<div>
			<table  id="myTable" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center">Code</th>
						<th class="text-center">Name</th>
						<th class="text-center">Category</th>
						<th class="text-center">Image</th>
						<th class="text-center">Quantity</th>						
						<th class="text-center">Price</th>												
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $key => $product) { ?>
					<tr class="">
						<td class="text-center"><?php echo $product['id'] ?></td>
						<td class="text-left"><?= $product['name'] ?></td>
						<td class="text-left"><?= $product['category_id'] ?></td>
						<td class="text-right"><?= $product['img'] ?></td>
						<td class="text-right"><?= $product['quantity'] ?></td>
						<td class="text-right"><?= $product['price'] ?></td>
						<td class="text-center">							
							<a href="?mod=product&act=detail&id=<?php echo $product['id'] ?>" title="More about Product" class="btn" style="color: green"><i class="fa fa-pencil"></i></a>
							<a href="?mod=product&act=edit&id=<?php echo $product['id'] ?>" title="Update product informations" class="btn" style="color: green"><i class="fa fa-pencil"></i></a>
							<a href="?mod=product&act=del&id=<?php echo $product['id'] ?>" title="Delete product from system" class="btn" style="color: red"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				

			</table>
		</div>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'views/layouts/footer.php'; ?>