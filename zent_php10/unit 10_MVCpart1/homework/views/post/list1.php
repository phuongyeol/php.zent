<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h3> Hiển thị danh sách bài viết </h3>
	<table  style="border: 1px solid;">
		<tr >
			<td>ID</td>
			<td>Title</td>
			<td>Short Content</td>
		</tr>
		<?php 
			$i=0;
			foreach ($post_data as $row) {
		?> 
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['short_content'] ?></td>
			<td>
                    <a href="detail.php?id=<?php echo $row['id'];?>" class="btn btn-success">Detail</a> 
                     <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Update</a>  
                    <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                </td>
		</tr>
		<?php	
			}
		 ?>
	</table>
</body>
</html>