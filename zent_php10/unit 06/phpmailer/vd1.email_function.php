<meta charset="utf-8">
<?php 
    function send_email($email_recive,$name,$contents,$subject ){
        //https://www.google.com/settings/security/lesssecureapps

        // Khai báo thư viên phpmailer
        require "lib.phpmailer/PHPMailerAutoload.php";
        require "lib.phpmailer/class.phpmailer.php";

        // Khai báo tạo PHPMailer
        $mail = new PHPMailer();

        //Khai báo gửi mail bằng SMTP
        $mail->IsSMTP();

        //SMTPDebug: Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
        // 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
        // 1 = Thông báo lỗi ở client
        // 2 = Thông báo lỗi cả client và lỗi ở server
        // To load the French version

        $mail->setLanguage('vi', '/optional/path/to/language/directory/');
        $mail->SMTPDebug  = 0;
        $mail->CharSet="UTF-8";
        $mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
        $mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
        $mail->Port       = 587; // cổng để gửi mail
        $mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
        $mail->SMTPAuth   = true; //Xác thực SMTP
        $mail->Username   = "phuong.tt.hust@gmail.com"; // Tên đăng nhập tài khoản Gmail
        $mail->Password   = "zon20156275"; //Mật khẩu của gmail
        $mail->SetFrom("phuong.tt.hust@gmail.com", "Phuong Tran"); // Thông tin người gửi
        $mail->AddReplyTo("phuong.tt.hust@gmail.com","Phuong Tran");// Ấn định email sẽ nhận khi người dùng reply lại.
        $mail->AddAddress($email_recive, $name);//Email của người nhận
        $mail->Subject = $subject; //Tiêu đề của thư
        $mail->MsgHTML($contents); //Nội dung của bức thư.
        
        // $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
        // Gửi thư với tập tin html
        $mail->AltBody = "Hello";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
        //$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach
         
        //Tiến hành gửi email và kiểm tra lỗi
        if(!$mail->Send()) {
            echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
            return false;
        } else {
            echo "Email has been send";
            return true;
            
        }
    }
 ?>