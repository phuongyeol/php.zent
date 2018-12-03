<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Danh sách bài viết</li>
     </ol>
	<form action="" method="POST">
		<div class="container">
			<div class="card-body">
	          	<div class="table-responsive">
	          		
		
					<div>
						<a href="?mod=post&&act=add" class="btn btn-success"><i class="fa fa-plus"></i> ADD NEWS POST</a>
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
		                  <th>No.</th>
		                  <th>Title</th>
		                  <th>Author</th>
		                  <th>Action</th>
		                </tr>
		              </thead>
				
						<?php 
							$i = 0;
							foreach ($posts as $post){ 
								$i++;
						?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $post['title']?></td>
								<td><?= $post['author']?></td>
								<td>
									<a href="?mod=post&act=detail&id=<?php echo $post['id']?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
									<a href="?mod=post&act=edit&id=<?php echo $post['id']?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
									<a href="?mod=post&act=delete&id=<?php echo $post['id']?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?');"><i class="fa fa-trash"></i></a>
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