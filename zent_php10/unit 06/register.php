<?php
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6LeGOVEUAAAAAPyOVcs912Gh1ZucrIQyT7WRCCLV';
$secret_key  = '6LeGOVEUAAAAANQ1-8ROXUk0ui3T-u1G20FtCMKc';
  
//kiem tra submit form
if(isset($_POST['submit']))
{
    //lấy dữ liệu được post lên
    $site_key_post    = $_POST['g-recaptcha-response'];
      
    //lấy IP của khach
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $remoteip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $remoteip = $_SERVER['REMOTE_ADDR'];
    }
     
    //tạo link kết nối
    $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    echo $api_url;
        echo "<br> URL: ".$api_url;
    //lấy kết quả trả về từ google
    $response = file_get_contents($api_url);
    echo "<br>";
    echo $response;
    //dữ liệu trả về dạng json
    $response = json_decode($response);

    var_dump($response);
    die;

    if(!isset($response->success))
    {
        echo 'Captcha khong dung';
    }
    if($response->success == true)
    {	
        echo 'Captcha dung';
    }else{
        echo 'Captcha khong dung';
    }
}
?>

<script src='https://www.google.com/recaptcha/api.js'></script>
<form action="" method="POST">
    <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
    <input type="submit" name="submit" value="submit">
</form>
