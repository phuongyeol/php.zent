<meta charset="utf-8">
<?php 
    // Cấu hình thông tin google cung cấp:
        $api_url = 'https://www.google.com/recaptcha/api/siteverify';
        $site_key = '6LeGOVEUAAAAAPyOVcs912Gh1ZucrIQyT7WRCCLV';
        $sercet_key = '6LeGOVEUAAAAANQ1-8ROXUk0ui3T-u1G20FtCMKc';

    // Kiểm tra submit form: 
    if (isset($_POST['submit'])) {
        // Lấy dữ liệu được post:
        $site_key_post = $_POST['g-recaptcha-response'];

        // Lấy IP của khách:
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $remoteip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $remoteip = $_SERVER['REMOTE_ADDR'];
        }

        // Tạo link kết nối:
        $api_url = $api_url.'?secret='.$sercet_key.'&response='.$site_key_post.'&remoteip='.$remoteip;

        $response = file_get_contents($api_url);

        // Lấy kết quả trả về từ google:
        $response = json_decode($response);

        if (!isset($response->success)) {

            echo "Capcha không đúng";
            setcookie('captcha','Captcha không đúng', time()+2);
            header('Location: ex01.php');
            
        }

        if ($response->success) {
            include('email_func.php');
            send_email($_POST['email'],$_POST['name'],"Cập nhật thông tin thành công", "SUBMIT INFO " );
        } else {
            setcookie('captcha', 'Captcha không đúng', time()+2);
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

    <!-- Capcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
    <div class="container">
        <form action="ex01.php" method="POST" role="form">
            <legend>ZENT GROUP-PHP-MYSQL</legend>

            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại:</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
            </div>

            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="email">
            </div>

            <div class="form-group">
                <label for="">Password:</label> <br>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="pass">
            </div>
            <div class="form-group">
                <label for="">Giới tính:</label> <br>
                <input type="radio" name="sex" value="Nam">Male
                <input type="radio" name="sex" value="Nữ">Female
                <input type="radio"  name="sex" value="Không xác định">Other
            </div>
            <div class="form-group">
                <label for="">Địa chỉ:</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="addr">
            </div>

            <!-- Kiểm tra Capcha -->
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>" name="g-recaptcha-response"></div>
            
            <button type="submit" class="btn btn-primary" name="submit">Lưu Thông tin</button>
        </form>
    </div>

</body>
</html>