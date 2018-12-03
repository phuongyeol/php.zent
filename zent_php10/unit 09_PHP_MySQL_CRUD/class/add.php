<!-- Thêm mới người dùng -->
<?php 
	
 ?>
 <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - MYSQL</h3>
    <hr>
        <form action="add_process.php" method="POST" role="form">
            <div class="form-group">
                <label for="">Họ và tên:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="mobile">
            </div>  
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào email" name="email">
            </div>
            
            
            <button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>