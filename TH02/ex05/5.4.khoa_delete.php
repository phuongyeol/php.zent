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
			if (document.frmPHP.txtID.value=="") {
				alert("Invalid ID, Please enter ID");
				document.frmPHP.txtID.focus();
				return false;
				}
			if (document.frmPHP.txtName.value=="") {
				alert("Please enter Name");
				document.frmPHP.txtName.focus();
				return false;
			}
				return true;
		}
	</script>
</head>
<body>
    <div class="container">
        <form name="frmPHP" method="post" action="5.4.khoa_dodelete.php" onsubmit="return checkInput();">
            <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <h3>Please enter ID to Delete: </h3>

            <div class="form-group">
                <label for="">ID:</label>
                <input type="text" class="form-control textbox" placeholder="id" name="txtID" size="25" maxlength="3">
            </div>
            
            <button type="submit" value="Delete" class="btn btn-primary" name="delete">Delete</button>
            <button type="reset" value="Reset" class="btn btn-primary" name="save">Reset</button>
        </form>
    </div>
</body>
</body>
</html>
