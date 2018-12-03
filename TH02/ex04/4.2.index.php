
<?php 
    session_start();
    if (isset($_GET['submit'])) {
        if (isset($_GET['province']) && isset($_GET['industry'])) {
            $_SESSION['show'] = true;
            $_SESSION['province'] = $_GET['province'];
            $_SESSION['industry'] = $_GET['industry'];
            header('Location: 4.2.show.php');
        }else if (!isset($_GET['province'])) {
            echo "<br> <h3 style = \"text-center\"> Error 'province'</h3> ";
            $_SESSION['show'] = false;
        }elseif (!isset($_GET['industry'])) {
            echo "<br> <h3 style = \"text-center\"> Error 'Industry'</h3> ";
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

        <form action="" method="GET" role="form" >
            <legend>FORM VARIABLE - 20156275 - TRẦN THỊ PHƯƠNG</legend>
            <div class="form-group">
                <label for="">Province</label>
                <select name="province">
                    <option value="Hanoi" selected>Hanoi</option>
                    <option value="Ho Chi Minh">Ho Chi Minh</option>
                    <option value="Da Nang">Da Nang</option>
                    <option value="Nha Trang">Nha Trang</option>
                </select>
            </div>  
            
            <div class="form-group">
                <label for="">Industry:</label>
                <select name="industry" multiple>
                    <option value=”AUT”>Automobile</option>
                    <option value=”FOO”>Foods</option>
                    <option value=”ENG”>Enginering</option>
                    <option value=”GAR”>Garment</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<form>
