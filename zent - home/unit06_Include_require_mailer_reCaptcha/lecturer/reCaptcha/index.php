<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<?php
//cấu hình thông tin do google cung cấp
	$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
	$site_key    = '6LfOhkAUAAAAALPm83-NqxjKC7fFih8T1Sw4YkGZ';
	$secret_key  = '6LfOhkAUAAAAAOdvl1z3Wrl7IRREj4az9f6yJMHu';

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
		$api_url = $api_url.'secret='.secret_key.'response='.site_key_post.'remoteip='.remoteip;
    //lấy kết quả trả về từ google
		$response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
		$response = json_decode($response);
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
	
	<form action="" method="POST">		
		<div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>