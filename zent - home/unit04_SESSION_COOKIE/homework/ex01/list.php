<?php 
	session_start();
	$students = $_SESSION['student'];
	if(isset($_POST['add'])){
		header('Location: add.php');
	}
	if(isset($_POST['detail'])){
		header('Location: detail.php');
	}
	if(isset($_POST['delete'])){
		header('Location: delete.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script  type="text/javascript" charset="utf-8">
		$(function(){
			setTimeout(function(){
				$(".alert").hide();
			}, 1000);
		});
	</script>
</head>
<body>
	<div class="container">
		
		<form action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<legend><h3 class="text-center text-uppercase"><strong>Student List</strong></h3></legend>
			</div>
			<button type="submit" class="btn btn-primary" name="add">Add </button>
			<?php if (isset($_COOKIE['msg'])) { ?>
			<div class="alert alert-success">
				<strong>Success!</strong><?php echo $_COOKIE['msg'] ?>
			</div>
			<?php }?>
			
			<?php if (isset($_COOKIE['msg_delete'])) { ?>
				<div class="alert alert-success">
					<strong>Success!</strong><?php echo $_COOKIE['msg_delete'] ?>
				</div>
			<?php } ?>				
			
			<?php if(count($students)>0){ ?>			
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>ID</th>
						<th>Fullname</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					<?php if (count($students)>0) { ?>
					<?php $count = 0; ?>
					<?php foreach ($students as $student){  ?>
					<tr>
						<td><?php echo ++$count; ?></td>
						<td><?php echo $student['id'] ?></td>
						<td><?php echo $student['name'] ?></td>
						
						<td>
							<a href="detail.php?id=<?php echo $student['id'] ?>" title="" class="btn btn-info" name="detail">Details</a>
							<a  href="delete.php?id=<?php echo $student['id'] ?>" title="" class="btn btn-danger" name="delete">Delete</a>
						</td>
					</tr>
					<?php  } ?>
					<?php } ?>
				</tbody>
			</table>
			
			<?php } else{
				echo "<h4 style=\"color:red \" class=\"text-uppercase\">Không tồn tại sinh viên nào<h4>";
			} ?>
		</form>	
	</div>
</body>
</html>