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
        if (isset($_SESSION["maSV"])){
            $con = mysqli_connect("localhost","root","root","th05_qlsinhvien") or die("Khong the ket noi co so du lieu.");
            mysqli_select_db($con,"th05_qlsinhvien") ;
            mysqli_query($con,"set names 'utf8'");
            $sql= "select * from tb2_sinhvien, tb4_ketqua where tb2_sinhvien.maSV=tb4_ketqua.maSV AND tb4_ketqua.maSV='".$_SESSION["maSV"]."'";
            $result= mysqli_query($con,$sql);
            
        ?>
    <div class="container">
        <table class="table table-border">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Thông tin cá nhân của <?php echo $_SESSION['tenSV']; ?></h3>
            <tbody>
                <tr>
                    <th>Mã số sinh viên</th>
                    <th>Username</th>
                    <th>Họ sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Nơi sinh</th>
                    <th>Đại chỉ</th>
                    <th>Mã môn học</th>
                    <th>Điểm</th>
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
                        <td><?php echo $row["maSV"] ?></td>
                        <td><?php echo $row["userName"] ?></td>
                        <td><?php echo $row["hoSV"] ?></td>
                        <td><?php echo $row["tenSV"] ?></td>
                        <td><?php echo $row["gioiTinh"] ?></td>
                        <td><?php echo $row["ngaySinh"] ?></td>
                        <td><?php echo $row["noiSinh"] ?></td>
                        <td><?php echo $row["diaChi"] ?></td>
                        <td><?php echo $row["maMH"] ?></td>
                        <td><?php echo $row["diem"] ?></td>
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
        <input type="button" name="Button" class="btn btn-primary" value="Đăng xuất" onClick="javascript:window.open('Lab8_3.php','_self')">
        <input type="button" name="Button" class="btn btn-primary" value="Xem bảng điểm" onClick="javascript:window.open('Lab8_4.php','_self')">
    </div>
    </form>
</body>
</html>


