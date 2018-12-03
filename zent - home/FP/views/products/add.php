<?php include_once 'views/layouts/header.php'; ?>
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">					
					<span><a href="?mod=staff" title="Back to list product" class="fa fa-arrow-circle-left btn btn-lg" ></a></span>Product Management 
				</h2> 
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		
		<form action="?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
			<h4 class="text-center text-uppercase">Add new product</h4>
			<table class="table">
				<tbody>
					<tr>
						<td width="50%">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Product name" name="name" class="">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Image</label>
								<input type="file"  id="img" placeholder="" name="img" class="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="">Quantity</label>
								<input type="text" class="form-control" id="quantity" placeholder="Input quantity" name="quantity" class="">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Price</label>
								<input type="text" class="form-control" id="price" placeholder="Input price" name="price" class="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="">Category</label>
								<br/>
								<select name="category">
									<?php foreach ($categories as $key => $category) {?>
									<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</td>
						<td></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-primary" name="submit" >Add</button>
		</form>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>