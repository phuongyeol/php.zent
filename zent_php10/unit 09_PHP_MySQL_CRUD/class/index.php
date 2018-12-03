<!-- Trang hiển thị danh sách người dùng -->
<?php 
	include_once("connection.php");
	$query = "SELECT * FROM user";
	$result = $conn->query($query);
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">DANH SÁCH NGƯỜI DÙNG</h2>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <table class="table">
        	<?php while ($row = $result->fetch_assoc()) { ?>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <a href="add.php" class="btn btn-success">Detail</a> 
                     <a href="update.php" class="btn btn-warning">Update</a>  
                    <a href="delete.php" class="btn btn-danger">Delete</a>

                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
    </div>
</body>
</html>