<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insert Product</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.id_sp.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.id_sp.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="sanpham_doinsert.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Điền thông tin sản phẩm cần thêm vào: </h3>

            <div class="form-group">
                <label for="">Mã sản phẩm:</label>
                <input type="text" class="form-control textbox" name="id_sp" size="25" maxlength="6">
            </div>
            <div class="form-group">
                <label for="">Tên sản phẩm:</label>
                <input type="text" class="form-control textbox" name="ten_sp" >
            </div>
            <div class="form-group">
                <label for="">Dơn giá:</label>
                <input type="text" class="form-control textbox" name="dongia" >
            </div>
            
            <button type="submit" value="Submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
