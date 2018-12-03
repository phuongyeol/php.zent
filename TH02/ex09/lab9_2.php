<!DOCTYPE html>
<?php
    session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Information</title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

    <?php
        if (isset($_SESSION["id_nv"])){
            $con = mysqli_connect("localhost","root","root","th09_qlbanhang") or die("Khong the ket noi co so du lieu.");
            mysqli_select_db($con,"th09_qlbanhang") ;
            mysqli_query($con,"set names 'utf8'");
            $sql= "select * from nhanvien, hoadon where nhanvien.id_nv=hoadon.id_nv AND hoadon.id_nv='".$_SESSION["id_nv"]."'";
            $result= mysqli_query($con,$sql);
            
        ?>
    <div class="container">
        <table class="table table-border">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Thông tin cá nhân của <?php echo $_SESSION['ten_nv']; ?></h3>
            <tbody>
                <tr>
                    <th>Mã số nhân viên:</th>
                    <th>Tên nhân viên</th>
                    <th>Số điện thoại:</th>
                    <th>Địa chỉ:</th>
                    <th>Mã Hóa Đơn:</th>
                </tr>
            </tbody>
            <?php
                $i=0;
                while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                        $i=$i+1;      
            ?>
            <thread>
                <!-- Đưa dữ liệu vào từng dòng -->
                    <tr>
                        <td><?php echo $row["id_nv"] ?></td>
                        <td><?php echo $row["ten_nv"] ?></td>
                        <td><?php echo $row["dienthoai"] ?></td>
                        <td><?php echo $row["diachi"] ?></td>
                        <td><?php echo $row["id_hd"] ?></td>
                    </tr>
            </thread>
            <?php
                }
            }
            ?>
        </table>
    </div>
            
    </table>
    <form name="form1" method="post" action="">
    <a href="#"><div id="ht" name="b"></div></a>    
      <div align="center" class="container">
        <input type="button" name="Button" class="btn btn-primary" value="Trở về" onClick="javascript:window.history.back()">
        <input type="button" name="Button" class="btn btn-primary" value="Đăng xuất" onClick="javascript:window.open('Lab9_3.php','_self')">
        <input type="button" name="Button" class="btn btn-primary" value="Xem Hóa Đơn" onClick="javascript:window.open('Lab9_4.php','_self')">
    </div>
    </form>
</body>
</html>


