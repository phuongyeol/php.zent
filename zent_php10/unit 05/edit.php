<meta charset="utf-8">
<?php 
	session_start();
	// Bước 1: Lấy dữ liệu khóa chính chuyển sang
		$mssv = $_GET['mssv'];
		// echo $mssv;
	// Bước 2: Lấy thông tin của khóa chính
		$student = $_SESSION['student'][$mssv];
		// echo "<pre>";
		// 	print_r($student);
		// echo "</pre>";

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
        <form action="add_process.php" method="POST" role="form">
            <legend>EDIT STUDENT INFORMATION</legend>

            <div class="form-group">
                <label for="">Mã số sinh viên:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập MSSV" name="mssv" value="<?php echo $student['mssv']; ?>">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name" value="<?php echo $student['name']; ?>">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" value="<?php echo $student['phone']; ?>">
            </div>

            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="email" value="<?php echo $student['email']; ?>">
            </div>

            <div class="form-group">
                <label for="">Giới tính:</label> <br>
                <input type="radio" name="sex" value="Nam" <?php if ($student['sex'] == 'Nam') echo "checked"; ?>> Nam

                <input type="radio" name="sex" value="Nữ" <?php ($student['sex'] == 'Nữ')?"checked":"" ?>>Nữ

                <input type="radio"  name="sex" value="Không xác định" <?php ($student['sex'] == 'Không xác định')?"checked":"" ?>>Other
            </div>

            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="addr" value="<?php echo $student['addr']; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Save</button>
        </form>
    </div>

</body>
</html>