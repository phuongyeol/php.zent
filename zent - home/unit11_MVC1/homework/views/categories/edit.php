<?php include 'views/layouts/header.php'; ?>
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">CATEGORIES 
					<span class="text-right">
						<a href="?mod=categories&act=add" title="Add new product" class="fa fa-plus btn btn-warning text-right" ></a>
					</span>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<form action="?mod=categories&act=update&id=<?php echo $category['id'] ?>" method="POST" role="form">

			<input type="hidden" class="form-control" name="id" value="<?php echo $category['id'] ?>">

			<div class="form-group">
				<label for="" class="text-left">Code</label>
				<input type="text" class="form-control" id="code" placeholder="" name="code" class="" value="<?php echo $category['code'] ?>">
			</div>
			<div class="form-group">
				<label for="" class="text-left">Name</label>
				<input type="text" class="form-control" id="name" placeholder="" name="name" class="" value="<?php echo $category['name'] ?>">
			</div>

			<div class="form-group">
				<label for="" class="text-left">Description</label>
				<input type="text" class="form-control" id="description" placeholder="" name="description" class="" value="<?php echo $category['description'] ?>">
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Update</button>
		</form>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>