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
</head>
<body>
	<div class="container">
		<form action="test1_info.php" method="POST" role="form" name="submit">
			<legend><strong>Nhập thông tin sinh viên</strong></legend>
			<div class="form-group">
				<label for="">Mã số</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="id" required="">
			</div>	
			<div class="form-group">
				<label for="">Họ tên</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="name" required="">
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="mobile"  required="">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="email" required="">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="country" required="">
			</div>
				
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			<button type="reset" class="btn btn-primary" name="reset">Submit</button>
		</form>
	</div>
</body>
</html>