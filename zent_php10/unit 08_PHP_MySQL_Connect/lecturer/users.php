<?php 
	
	include_once 'connection.php';
	
	//cau lenh truy van CSDL
	$query="SELECT * FROM lecturer_users";

	//thuc thi cau lenh truy van CSDL
	$result = $conn->query($query);

	// while ($row= $result->fetch_assoc()) {
	// 	echo "<pre>";
	// 		// print_r($row);
	// 	echo "</pre>";
	// }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Connection</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<a href="user_add.php" title="" class="btn btn-primary">Add user</a>
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Created_at</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row= $result->fetch_assoc()) { ?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['name']  ?></td>
					<td><?= $row['email']  ?></td>
					<td><?= $row['mobile']  ?></td>
					<td><?= $row['created_at']  ?></td>						
					<td><?= $row['status']  ?></td>	
					<td><a href="user_detail.php?id=<?= $row['id'] ?>" title="">Detail</a></td>					
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>