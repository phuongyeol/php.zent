
<?php 
    session_start();
    if (isset($_POST['submit'])) {
        if (isset($_POST['toantu']) && isset($_POST['numb01']) && isset($_POST['numb02'])) {
            $_SESSION['ketqua'] = true;
            $_SESSION['toantu'] = $_POST['toantu'];
            $_SESSION['numb01'] = $_POST['numb01'];
            $_SESSION['numb02'] = $_POST['numb02'];
            // echo "<pre>";
            //     print_r($_SESSION);
            // echo "</pre>";
            header('Location: 4.3.ketqua.php');
        }else if (!isset($_POST['toantu'])) {
            echo "<br> Error: Bạn chưa chọn phép tính </h3> ";
            $_SESSION['ketqua'] = false;
        }elseif (!isset($_POST['numb01'])) {
            echo "<br> Error: Bạn chưa nhập số thứ nhất</h3> ";
            $_SESSION['ketqua'] = false;
        }
        elseif (!isset($_POST['numb02'])) {
            echo "<br>Error: Bạn chưa nhập số thứ hai</h3> ";
            $_SESSION['ketqua'] = false;
        }
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
        <form action="" method="POST" role="form">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <legend>PHÉP TÍNH TRÊN HAI SỐ </legend>
            
            <div class="form-group">
                <label for="">Chọn phép tính:</label>
                <input type="radio" name="toantu" value="Cộng">Cộng
                <input type="radio" name="toantu" value="Trừ">Trừ
                <input type="radio"  name="toantu" value="Nhân">Nhân
                <input type="radio"  name="toantu" value="Chia">Chia
            </div>

            <div class="form-group">
                <label for="">Số thứ nhất</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số thứ nhất" name="numb01">
            </div>  

            <div class="form-group">
                <label for="">Số thứ hai</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số thứ hai" name="numb02">
            </div> 

            <button type="submit" class="btn btn-primary" name="submit">Tính</button> 
        </form>
    </div>

</body>
</html>