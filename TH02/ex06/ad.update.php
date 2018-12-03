<?php 
    // include_once('connection_funct.php');
	$link = mysql_connect ("localhost", "root", "root") or die("Khong ket noi duoc MySQL Database");
	mysql_select_db("th06_qlcanbo", $link);
    if (isset($_POST['maCB'])) {
        $maCB = $_POST['maCB'];
    }else{
        echo "Không tìm thấy maCB";
    }
    $sql = "SELECT * from tb2_canbo WHERE maCB=".$maCB;
    $result = mysql_query($sql,$link);
    if($result) $affectrow = mysql_affected_rows();
    mysql_close($link);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản Lý Cán Bộ</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.maCB.value=="") {
				alert("Invalid ID, Please enter maCB");
				document.frmPHP.maCB.focus();
				return false;
			}
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="" onsubmit="return checkInput();">
            <legend>UPDATE INFO</legend>
            <div class="form-group">
                <label for="">Mã Cán Bộ:</label>
                <input type="text" class="form-control textbox" name="maCB" size="25" maxlength="3" value="<?php echo $maCB ?>">
            </div>
            
            <div class="form-group">
                <label for="">Username: </label>
                <input type="text" class="form-control textbox"  name="userName" size="25" maxlength="50" value="<?php echo $userName ?>">
            </div> 
            <div class="form-group">
                <label for="">Password: </label>
                <input type="text" class="form-control textbox" name="passWord" size="25" maxlength="50" value="<?php echo $passWordS ?>">
            </div> 
            <div class="form-group">
                <label for="">Họ Cán Bộ: </label>
                <input type="text" class="form-control textbox"  name="hoCB" size="25" maxlength="50" value="<?php echo $hoCB ?>">
            </div> 
            <div class="form-group">
                <label for="">Tên Cán Bộ: </label>
                <input type="text" class="form-control textbox"  name="tenCB" size="25" maxlength="50" value="<?php echo $tenCB ?>">
            </div> 
            <div class="form-group">
                <label for="">Giới Tính: </label>
                <input type="number" class="form-control textbox" name="gioiTinh" size="25" maxlength="50" value="<?php echo $gioiTinh ?>">
            </div>
            <div class="form-group">
                <label for="">Ngày Sinh: </label>
                <input type="text" class="form-control textbox" name="ngaySinh" size="25" maxlength="50" value="<?php echo $ngaySinh ?>">
            </div>
            <div class="form-group">
                <label for="">Nơi Sinh: </label>
                <input type="text" class="form-control textbox" name="noiSinh" size="25" maxlength="50" value="<?php echo $noiSinh ?>">
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ: </label>
                <input type="text" class="form-control textbox" name="diaChi" size="25" maxlength="50" value="<?php echo $diaChi ?>">
            </div>
            <div class="form-group">
                <label for="">Mã Viện: </label>
                <input type="text" class="form-control textbox" name="maVien" size="25" maxlength="50" value="<?php echo $maVien ?>">
            </div>
            <div class="form-group">
                <label for="">Chức Danh: </label>
                <input type="text" class="form-control textbox" name="chucDanh" size="25" maxlength="50" value="<?php echo $chucDanh ?>">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại: </label>
                <input type="text" class="form-control textbox" name="soDienthoai" size="25" maxlength="50" value="<?php echo $soDienthoai ?>">
            </div>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="text" class="form-control textbox"  name="email" size="25" maxlength="50" value="<?php echo $email ?>">
            </div>
            <button type="submit" value="Submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
