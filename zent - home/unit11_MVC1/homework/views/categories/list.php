<?php 

include_once 'views/layouts/header.php'; 

?>

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
		<table class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>ID</th>
					<th>Code</th>
					<th>Name</th>
					<th>Description</th>
					<th>Created time</th>
					<!-- <th>Updated time</th> -->
					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $row) { ?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['code'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['description'] ?></td>
					
					<td><?php echo $row['created_at'] ?></td>
					<td class="text-center">
						<a href="" title="Detail" class="btn btn-sm btn-success fa fa-info" data-toggle="modal" data-target="#myModal_<?php echo $row['id'] ?>"></a>

						<!-- <button type="button" class="btn btn-info btn-lg" >Open Modal</button> -->

						<!-- Modal -->
						<div id="myModal_<?php echo $row['id'] ?>" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Category's information</h4>
									</div>
									<div class="modal-body">
										<h4>Zent corp</h4>
										<table class="table table-hover">
											<tbody class="text-left">
												<tr>
													<td style="font-weight: bold;">ID</td>
													<td><?= $row['id'] ?></td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Code</td>
													<td><?= $row['code'] ?></td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Name</td>
													<td><?= $row['name'] ?></td>
												</tr>

												<tr>
													<td style="font-weight: bold;">Description</td>
													<td class="text-left"><?= $row['description'] ?></td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Created time</td>
													<td><?= $row['created_at'] ?></td>
												</tr>
												<tr>
													<td style="font-weight: bold;">Updated time</td>
													<td><?= $row['updated_at'] ?></td>
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
						<a href="?mod=categories&act=edit&id=<?php echo $row['id'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench" data-toggle="modal" data-target=""></a>
						
                        <a href="?mod=categories&act=delete&id=<?php echo $row['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash delete"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>