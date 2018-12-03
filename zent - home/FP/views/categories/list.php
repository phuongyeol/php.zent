<?php include_once 'views/layouts/header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Category Management 
					<span><a href="?mod=category&act=add" title="Add new category" class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#category_add_modal"></a></span>
				</h2> 
			</div>
			<!-- /.col-lg-12 -->
			<div class="modal fade" id="category_add_modal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add new Category</h4>
						</div>
						<form action="?mod=category&act=store" method="POST" role="form">
							<div class="modal-body">
								<div class="form-group">
									<label for="">Name</label>
									<input type="text" class="form-control" id="name" placeholder="Input field" name="name">
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<input type="text" class="form-control" id="description" placeholder="Input field" name="description">
								</div>							


								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" name="name">Submit</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- ./modal -->
		</div>
		<!-- /.row -->

		<div>
			<table  id="myTable" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Name</th>
						<th class="text-center">Description</th>>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $key => $category) { ?>
					<tr class="">
						<td class="text-center"><?php echo $category['id'] ?></td>
						<td class="text-left"><?= $category['name'] ?></td>
						<td class="text-right"><?= $category['description'] ?></td>
						<td class="text-center">
							<a href="" title="More about category" class="btn fa fa-info" data-toggle="modal" data-target="#modal_<?php echo $category['id'] ?>"></a>
							<a href="?mod=category&act=edit&id=<?php echo $category['id'] ?>" title="Update category informations" class="btn" style="color: green"><i class="fa fa-pencil"></i></a>
							<a href="?mod=category&act=del&id=<?php echo $category['id'] ?>" title="Delete category from system" class="btn" style="color: red"><i class="fa fa-times"></i></a>
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