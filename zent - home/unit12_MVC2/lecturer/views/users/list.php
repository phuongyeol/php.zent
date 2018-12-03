<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-uppercase text-center">Danh sách người dùng</h3>
		<a href="" title="" class="btn btn-primary">Add user</a>
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $user) { ?>
				<tr>
					<td><?= $user['id'] ?></td>
					<td><?= $user['name']  ?></td>
					<td><?= $user['email']  ?></td>
					<td><?= $user['mobile']  ?></td>
											
					<td><?= $user['status']  ?></td>	
					<td><a href="?mod=users&act=detail&id=<?php echo $user['id'] ?>" title="">Detail</a></td>					
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>