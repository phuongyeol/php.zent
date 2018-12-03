
<?php 
    session_start();
    $kq;
    if (isset($_POST['submit'])) {
        
        $select = $_POST['select'];
        if ($select == "thanhnien") {
            $kq = "https://thanhnien.vn/";
        }elseif ($select == "tuoitre") {
            $kq = "http://tuoitre.vn";
        }elseif ($select == "vnexpress") {
            $kq = "http://vnexpress.net";
        }elseif ($select == "kenh14") {
            $kq = "http://kenh14.net";
        }

        $kq = $kq." là đường link bạn cần tìm";
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
        <legend>FORM VARIABLE - 20156275 - TRẦN THỊ PHƯƠNG</legend>
        <legend>ĐỌC BÁO TRÊN MẠNG</legend>
        <form action="" method="POST" role="form" >
            
            <div class="form-group">
                <label>Chọn bào bạn muốn đọc: </label>
                <select name="select">
                    <option value="thanhnien" selected>Báo Thanh Niên
                    <option value="tuoitre">Báo Tuổi Trẻ</option>
                    <option value="kenh14">Kênh 14</option>
                    <option value="vnexpress">Việt Nam Express</option>
                </select>
            </div> 
            <div>
                <td><input type="text" class="form-control" id="" readonly="true" name="kq" value="<?php if (isset($_POST['submit'])) echo $kq; ?>"></td>
            </div> 

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<form>
