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
            <legend>ADD NEW STUDENT</legend>

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
                <input type="radio" name="sex" value="Nam">Nam
                <input type="radio" name="sex" value="Nữ">Nữ
                <input type="radio"  name="sex" value="Không xác định">Other
            </div>

            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="addr">
            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Save</button>
        </form>
    </div>

</body>
</html>