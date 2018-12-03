
<?php 
    if (isset($_POST['submit'])) {
        if (isset($_POST['diem1']) && isset($_POST['diem2']) ) {
           $diem1 = $_POST['diem1'];
           $diem2 = $_POST['diem2'];

           $diemTB = ($diem1+2*$diem2)/3;

           if ($diemTB >= 5) {
                $ketqua = "Được lên lớp";   
            }elseif ($diemTB <5) {
                $ketqua = "Ở lại lớp";
            }

            if ($diemTB>=8) {
                $xeploai = "Giỏi";
            }else if ($diemTB>6.5 && $diemTB<8) {
                $xeploai = "Khá";
            }else if ($diemTB>5 && $diemTB<6.5) {
                $xeploai = "Trung Bình";
            }else if ($diemTB<5) {
                $xeploai = "Yếu";
            }
        }else if (!isset($_POST['diem1'])) {
            echo "<br> Error: Bạn chưa nhập điểm HK1 </h3> ";
        }elseif (!isset($_POST['diem2'])) {
            echo "<br> Error: Bạn chưa nhập điểm HK2</h3> ";
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
        <table class="table table-border">
            <form action="4.6.ketquahoctap.php" method="POST" role="form" name="hoctap">
                <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
                <legend>KẾT QUẢ HỌC TẬP</legend>

                <tr class="form-group">
                    <td><label for="">Điểm HK1</label></td>
                    <td><input type="text" class="form-control" placeholder="Nhập vào điểm HK1" name="diem1" value="<?php if (isset($_POST['submit'])) {echo $diem1;} ?>"></td>
                </tr> 
                <tr class="form-group">
                    <td><label for="">Điểm HK2</label></td>
                    <td><input type="text" class="form-control" placeholder="Nhập vào điểm HK2" name="diem2" value="<?php if (isset($_POST['submit'])) {echo $diem2;} ?>"></td>
                </tr> 
                 <tr class="form-group">
                    <td><label for="">Điểm trung bình</label></td>
                    <td><input type="text" class="form-control" readonly="true" name="diemTB" value="<?php if (isset($_POST['submit'])) {echo $diemTB;} ?>"></td>
                </tr> 
                <tr class="form-group">
                    <td><label for="">Kết quả:</label></td>
                    <td><input type="text" class="form-control" id="" readonly="true" name="ketqua" value="<?php if (isset($_POST['submit'])) {echo $ketqua;} ?>">
                </tr> 

                <tr class="form-group">
                    <td><label for="">Xếp loại học lực:</label></td>
                    <td><input type="text" class="form-control" id="" readonly="true" name="xeploai" value="<?php if (isset($_POST['submit'])) {echo $xeploai;} ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary" name="submit">Xem kết quả</button><td>
                </tr>
            </form>
        </table>
        
    </div>

</body>
</html>