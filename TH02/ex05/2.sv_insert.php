<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản Lý Sinh Viên</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.maSV.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.maSV.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="2.sv_doinsert.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Please enter Information to Insert: </h3>

            <div class="form-group">
                <label for="">Mã sinh viên:</label>
                <input type="text" class="form-control textbox" placeholder="Mã Sinh Viên" name="maSV" size="25" maxlength="3">
            </div>
            <div class="form-group">
                <label for="">Username:</label>
                <input type="text" class="form-control textbox" name="userName" >
            </div>
            <div class="form-group">
                <label for="">Password:</label>
                <input type="text" class="form-control textbox" name="passWord" >
            </div>
            <div class="form-group">
                <label for="">Họ SV:</label>
                <input type="text" class="form-control textbox" name="hoSV" >
            </div>
            <div class="form-group">
                <label for="">Tên SV:</label>
                <input type="text" class="form-control textbox" name="tenSV" >
            </div>
            <div class="form-group">
                <label for="">Giới Tính:</label>
                <input type="number" class="form-control textbox" name="gioiTinh" >
            </div>
            <div class="form-group">
                <label for="">Ngày Sinh:</label>
                <input type="date" class="form-control textbox" name="ngaySinh" >
            </div>
            <div class="form-group">
                <label for="">Nơi sinh:</label>
                <input type="text" class="form-control textbox" name="noiSinh" >
            </div>
            <div class="form-group">
                <label for="">Địa Chỉ:</label>
                <input type="text" class="form-control textbox" name="diaChi" >
            </div>
            <div class="form-group">
                <label for="">Mã Khoa:</label>
                <input type="text" class="form-control textbox" name="maKH" >
            </div>
            <div class="form-group">
                <label for="">Học Bổng:</label>
                <input type="number" class="form-control textbox" name="hocBong" >
            </div>
            <button type="submit" value="Submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
