<!DOCTYPE html>
<html>
<head>
	<title>Test02: Mailer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

</head>
<body>
	<?php 
		if (isset($_POST['send'])) {
			include_once('lib.phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer;
			$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'phuong.tt.hust@gmail.com';                 // SMTP username
		    $mail->Password = 'zon20156275';                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to
		    $mail->setFrom('phuong.tt.hust@gmail.com', 'Mailer');
    		$mail->addAddress($_POST['email'], 'Joe User'); 
		    $mail->isHTML(true);                                  // Set email format to HTML
    		$mail->Subject = "Email Auto From ZonZon";
   			$mail->Body    = $_POST['name'].$_POST['phone'].$_POST['sex'].$_POST['addr'];
   			if ($mail->send()) {
				 echo 'Message has been sent';
			} else{
				    echo 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
   			}
	 	} ?>
	 	<div class="container">
	 		<form action="" method="POST" role="form">
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
            <div class="g-recaptcha" data-sitekey="6Lfvy1EUAAAAAGVSNdyFWISQocRv7u10LDdF2ppw" name="g-recaptcha-response"></div>
            
            
            <button type="submit" class="btn btn-primary" name="send">Gửi mail</button>
        </form>
	 	</div>
	
	

</body>
</html>