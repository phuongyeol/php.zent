
<?php 
    if (isset($_POST['submit'])) {
        if (isset($_POST['bankinh'])) {
           $r = $_POST['bankinh'];
           $c = 2*$r*3.14;
           $s = $r*$r*3.14;
        }else {
            echo "<br> ERRO: Bạn chưa nhập vao bán kính hình tròn";
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
        <form action="4.4.hinhtron.php" method="POST" role="form" name="hinhtron">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <legend>TÍNH DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</legend>

            <div class="form-group">
                <label for="">Bán kính</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào bán kính hình tròn" name="bankinh" value="<?php if (isset($_POST['submit'])) {echo $r;} ?>">
            </div>  

            <div class="form-group">
                <label for="">Chu Vi</label>
                <input type="number" class="form-control" id="" placeholder="Chu vi hình tròn" name="chuvi" readonly="true" value="<?php if (isset($_POST['submit'])) {echo $c;} ?>">
            </div> 

            <div class="form-group">
                <label for="">Diện tích</label>
                <input type="number" class="form-control" id="" placeholder="Diện tích" name="dientich" readonly="true" value="<?php if (isset($_POST['submit'])) {echo $s;} ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Tính</button> 
        </form>
    </div>

</body>
</html>