<?php 
    session_start();
    if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == 1 ) {
        header('Location: 4.3.admin.php');
    }
    if (isset($_POST['user'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == 'admin' && $pass == '123456') {
            $_SESSION['isLogin'] = true;
            header('Location: 4.3.admin.php');
        }else{
            $_SESSION['isLogin'] = false;
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
            <legend>Zent Group - Đăng nhập</legend>
            <div class="form-group">
                <label for="">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="" placeholder="Username" name="user">
            </div>
            
            <div class="form-group">
                <label for="">Mật khẩu: </label>
                <input type="password" class="form-control" id="" placeholder="Password" name="pass">
            </div>  
            <button type="submit" class="btn btn-primary" name="save">Login</button>
        </form>
    </div>
</body>
</html>