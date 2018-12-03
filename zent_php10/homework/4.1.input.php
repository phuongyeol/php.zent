<?php 
    session_start();
    // $_SESSION['infoSV'] = null;
    if (isset($_POST['save'])) {
        $_SESSION['masv'] = $_POST['mssv'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['sex'] = $_POST['sex'];
        $_SESSION['addr'] = $_POST['addr'];
    }

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php 
            if (!isset($_SESSION['masv'])) {
         ?>

        <form action="" method="POST" role="form">
            <legend>ZENT GROUP-PHP-Thực hành gửi dữ liệu dùng POST</legend>

            <div class="form-group">
                <label for="">Mã số sinh viên:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập MSSV" name="mssv">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
            </div>

            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>

            <div class="form-group">
                <label for="">Giới tính:</label> <br>
                <input type="radio" name="sex" value="Nam">Male
                <input type="radio" name="sex" value="Nữ">Female
                <input type="radio"  name="sex" value="Không xác định">Other
            </div>

            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="addr">
            </div>

            <button type="submit" class="btn btn-primary" name="save">Lưu Thông tin</button>
        </form>

        <?php 
            }else{
         ?>
         <legend>Thông tin sinh viên: </legend>
         <p class="form-group"> Mã số sinh viên: <?php echo $_SESSION['masv']; ?></p>
         <p class="form-group"> Họ và tên: <?php echo $_SESSION['name']; ?></p>
         <p class="form-group"> Số điện thoại: <?php echo $_SESSION['phone']; ?></p>
         <p class="form-group"> Giới tính: <?php echo $_SESSION['sex']; ?></p>
         <p class="form-group"> Địa chỉ: <?php echo $_SESSION['addr']; ?></p>
         <?php } ?>
    </div>

</body>
</html>