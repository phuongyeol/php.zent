<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm Môn học</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.maSV.value=="") {
				alert("Invalid maSV, Please enter maSV");
				document.frmPHP.maSV.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="kq_doinsert.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Thêm kết quả: </h3>

            <div class="form-group">
                <label for="">Mã sinh viên:</label>
                <input type="text" class="form-control textbox"  name="maSV" size="25" maxlength="3">
            </div>
            <div class="form-group">
                <label for="">Mã Môn học:</label>
                <input type="text" class="form-control textbox" name="maMH" >
            </div>
            <div class="form-group">
                <label for="">Điểm:</label>
                <input type="text" class="form-control textbox" name="diem" >
            </div>
            
            <button type="submit" value="Submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
