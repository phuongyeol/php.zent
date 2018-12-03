<?php include_once 'views/layouts/header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">
					Staff Management 
					<span><a href="?mod=staff&act=add" title="Add new user" class="fa fa-plus btn btn-warning text-right" ></a></span>
				</h2> 
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->

		<div>
			<table  id="myTable" class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Name</th>
						<!-- <th class="text-center">Avatar</th> -->
						<th class="text-center">Mobile</th>
						<th class="text-center">Email</th>
						<th class="text-center">Job</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data as $key => $staff) { ?>
					<tr class="">
						<td class="text-center"><?php echo $staff['id'] ?></td>
						<td class="text-left"><?= $staff['name'] ?></td>
						<td class="text-right"><?= $staff['mobile'] ?></td>
						<td class="text-right"><?= $staff['email'] ?></td>
						<td class="text-right"><?= $staff['job'] ?></td>
						<td class="text-center">
							<a href="" title="More about Staff" class="btn fa fa-info" data-toggle="modal" data-target="#modal_<?php echo $staff['id'] ?>"></a>
							<!-- Modal -->
							<div id="modal_<?php echo $staff['id'] ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Stronger Together</h4>
										</div>
										<div class="modal-body">
											<table class="table table-hover">                                          
                                                <tbody>
                                                    <tr class="text-left">
                                                        <td >ID</td>
                                                        <td><?php echo $staff['id'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Name</td>
                                                        <td class="text-left"><?php echo $staff['name'] ?></td>
                                                    </tr>
                                                    
                                                    <tr class="text-left">
                                                        <td class="text-left">Phone</td>
                                                        <td><?php echo $staff['mobile'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Email</td>
                                                        <td><?php echo $staff['email'] ?></td>
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
							<a href="?mod=staff&act=edit&id=<?php echo $staff['id'] ?>" title="Update staff informations" class="btn" style="color: green"><i class="fa fa-pencil"></i></a>
							<a href="?mod=staff&act=del&id=<?php echo $staff['id'] ?>" title="Delete staff from system" class="btn" style="color: red"><i class="fa fa-times"></i></a>
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