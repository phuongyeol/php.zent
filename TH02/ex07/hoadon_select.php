<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danh sách hóa đơn</title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php 
    //Ket noi co so du lieu
    include_once('connection_funct.php');
    // Cau lenh truy van co so du lieu
    $query = "SELECT * FROM tb04_hoadon";
    // Thuc thi cau lenh truy van co so du lieu
    $result = $conn->query($query);
 ?>
</head>
<body>
    <div class="container">
        <table class="table table-hover">
            <legend> 20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Danh sách các hóa đơn:</h3>
            <thread>
                <tr>
                    <th >Mã hóa đơn:</th>
                    <th >Ngày lập hóa đơn:</th>
                    <th >Mã khách háng:</th>
                    <th >Mã nhân viên:</th>
                    <th >Ngày giao hàng:</th>
                    <th >Tổng tiền:</th>
                </tr>
            </thread>
            <tbody>
                <!-- Đưa dữ liệu vào từng dòng -->
                <?php while($row = $result->fetch_assoc()) {  ?>
                    <tr>
                        <th><?php echo $row['id_hd']; ?></th>
                        <th><?php echo $row['ngaylap_hd'];?></th>
                        <th><?php echo $row['id_kh'];?></th>
                        <th><?php echo $row['id_nv'];?></th>
                        <th><?php echo $row['ngaygiaohang'];?></th>
                        <th><?php echo $row['tongtien'];?></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>