
<?php 
    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && isset($_POST['oldNum']) && isset($_POST['newNum'])) {
           $name = $_POST['name'];
           $oldNum = $_POST['oldNum'];
           $newNum = $_POST['newNum'];
           $price = $_POST['price'];

           $automunt = ($newNum-$oldNum)*$price;
           
        }else if (!isset($_POST['name'])) {
            echo "<br> Error: Bạn chưa nhập tên chủ hộ </h3> ";
        }elseif (!isset($_POST['oldNum'])) {
            echo "<br> Error: Bạn chưa nhập chỉ số cũ</h3> ";
        }
        elseif (!isset($_POST['newNum'])) {
            echo "<br>Error: Bạn chưa nhập chỉ số mới</h3> ";
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
        <form action="4.5.thanhtoan.php" method="POST" role="form" name="thanhtoan">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <legend>THANH TOÁN TIỀN ĐIỆN</legend>

            <div class="form-group">
                <label for="">Tên chủ hộ:</label>
                <input type="text" class="form-control" placeholder="Nhập vào bán tên chủ hộ" name="name" value="<?php if (isset($_POST['submit'])) {echo $name;} ?>">
            </div> 
            <div class="form-group">
                <label for="">Chỉ số cũ (Kw):</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào chỉ số cũ" name="oldNum" value="<?php if (isset($_POST['submit'])) {echo $oldNum;} ?>">
            </div>  
            <div class="form-group">
                <label for="">Chỉ số mới (Kw):</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào chỉ số mới" name="newNum" value="<?php if (isset($_POST['submit'])) {echo $newNum;} ?>">
            </div>   

            <div class="form-group">
                <label for="">Đơn giá (VNĐ):</label>
                <input type="number" class="form-control" id="" placeholder="Chu vi hình tròn" name="price" readonly="true" value="2000">
            </div> 

            <div class="form-group">
                <label for="">Số tiền cần thanh toán (VNĐ):</label>
                <input type="number" class="form-control" id="" placeholder="Diện tích" name="automunt" readonly="true" value="<?php if (isset($_POST['submit'])) {echo $automunt;} ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Tính</button> 
        </form>
    </div>

</body>
</html>