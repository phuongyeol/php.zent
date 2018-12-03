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
						<a href="?mod=categories&act=detail&id=<?php echo $row['id'] ?>" title="Detail" class="btn btn-sm btn-success fa fa-info" data-toggle="modal" data-target=""></a>

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