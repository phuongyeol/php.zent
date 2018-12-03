
<?php 
    session_start();
    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && isset($_POST['gender'])) {
            $_SESSION['show'] = true;
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['gender'] = $_POST['gender'];
            header('Location: 4.1.show.php');
        }else if (!isset($_POST['name'])) {
            echo "<br> <h3 style = \"text-center\"> Error 'NAME'</h3> ";
            $_SESSION['show'] = false;
        }elseif (!isset($_POST['gender'])) {
            echo "<br> <h3 style = \"text-center\"> Error 'GENDER'</h3> ";
            $_SESSION['show'] = false;
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
            <legend>FORM VARIABLE - 20156275 - TRẦN THỊ PHƯƠNG</legend>
            
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>  
            
            <div class="form-group">
                <label for="">GENDER:</label> <br>
                <input type="radio" name="gender" value="Nam">Male
                <input type="radio" name="gender" value="Nữ">Female
                <input type="radio"  name="gender" value="Không xác định">Other
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>
</html>