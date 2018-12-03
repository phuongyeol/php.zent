<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
    session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.id_nv.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.id_nv.focus();
				return false;
			}
			if (document.frmPHP.passWord.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.passWord.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
	<div class="container">
        <form name="frmPHP" method="post" action="lab9.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>LOGIN </h3>

            <div class="form-group">
                <label for="">ID:</label>
                <input type="text" class="form-control textbox" name="id_nv" size="25" maxlength="6">
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="password" class="form-control textbox" name="passWord" >
            </div>
            <button type="submit" value="Dang nhap" class="btn btn-primary" name="Submit">Login</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
<?php
    if(isset($_POST["Submit"])&&isset($_POST["id_nv"]))
    {   
        $id_nv = $_POST["id_nv"]; 
                //Ket noi den MySQL
        $con=mysqli_connect("localhost","root","root","th09_qlbanhang") or die("Khong the ket noi den Server");
        //Chon CSDL qlsinhvien
        mysqli_select_db($con,"th09_qlbanhang") or die("khong ket noi CSDL duoc");
        //Chon bang ma la unicode utf-8
        mysqli_query($con,"set names 'utf8'");
        //Thuc hien cau truy van
        $query="select * from nhanvien where id_nv='" . $_POST["id_nv"] . "' And passWord='" . $_POST["passWord"] . "'";
        $result=mysqli_query($con,$query);

        if(mysqli_num_rows($result)>0)
            {
            //Dang nhap thanh cong luu ten sinh vien vao session
            $row = mysqli_fetch_row($result);
            $ten_nv=$row[2];
            // $_SESSION["maSV"]=$row[0];
            $_SESSION["id_nv"]=$id_nv;
            $_SESSION["ten_nv"]=$ten_nv;          
            header('Location:lab9_1.php');
}
        else
            {
            echo "<div align=center >Đăng nhập không thành công!<div>";
            }
            mysqli_close($con);
        }
?>

</body>
</html>
<?php ob_flush(); ?>
