

<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Danh sách user</li>
     </ol>
	<form action="" method="POST">
		<div class="container">
			<div class="card-body">
	          	<div class="table-responsive">
	          		
		
					<div>
						<a href="?mod=user&&act=add" class="btn btn-success"><i class="fa fa-plus"></i> ADD NEW USER</a>
					</div>

					<?php if (isset($_COOKIE['msg_s'])) { ?>
					<div class="alert alert-success">
					   <strong>Notification: </strong><?php echo $_COOKIE['msg_s']; ?>
					</div>
					<?php  } ?>

					<?php if (isset($_COOKIE['msg_f'])) { ?>
					<div class="alert alert-danger">
					   <strong>Notification: </strong><?php echo $_COOKIE['msg_f']; ?>
					</div>
					<?php  } ?>
					<?php echo "<br>"; ?>
		            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			            <thead>
			                <tr>
			                  	<th>NO.</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>Action</th>
			                </tr>
			             </thead>
			            <?php 
							$i = 0;
							foreach ($users as $user){ 
								$i++;
						?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $user['name']?></td>
								<td><?= $user['email']?></td>
								<td>
									<a href="?mod=user&act=detail&id=<?= $user['id']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
									<a href="?mod=user&act=edit&id=<?= $user['id']?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
									<a href="?mod=user&act=delete&id=<?= $user['id']?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?');"><i class="fa fa-trash"></i></a>
								</td>

							</tr>
						<?php } ?>
						
					</table>
				</div>
			</div>
		</div>
	</form>
<?php 
	include_once('views/layout/footer.php');
?>