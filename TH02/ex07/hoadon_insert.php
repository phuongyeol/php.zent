<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm Hóa đơn</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script language=JavaScript>
		function checkInput() {
			if (document.frmPHP.id_hd.value=="") {
				alert("Ihdalid ID, Please enter ID");
				document.frmPHP.id_hd.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="hoadon_doinsert.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Điền thông tin hóa đơn cần thêm vào: </h3>

            <div class="form-group">
                <label for="">Mã hóa đơn:</label>
                <input type="text" class="form-control textbox" name="id_hd" size="25" maxlength="6">
            </div>
            <div class="form-group">
                <label for="">Ngày lập hóa đơn:</label>
                <input type="date" class="form-control textbox" name="ngaylap_hd" >
            </div>
            <div class="form-group">
                <label for="">Mã khách hàng:</label>
                <input type="text" class="form-control textbox" name="id_kh" >
            </div>
            <div class="form-group">
                <label for="">Mã nhân viên:</label>
                <input type="text" class="form-control textbox" name="id_nv" >
            </div>
             <div class="form-group">
                <label for="">Ngày giao hàng:</label>
                <input type="date" class="form-control textbox" name="ngaygiaohang" >
            </div>
             <div class="form-group">
                <label for="">Tổng tiền:</label>
                <input type="number" class="form-control textbox" name="tongtien" >
            </div>
            
            <button type="submit" value="Submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
