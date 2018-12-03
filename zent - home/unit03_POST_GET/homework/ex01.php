<?php 
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$id=$_POST['id'];
		$mobile=$_POST['mobile'];
		$country=$_POST['country'];
		$email=$_POST['email'];
		$gender = $_POST['gender'];
		echo "<h3>Thông tin sinh viên</h3>";
		echo "Mã số sinh viên: $id<br>";
		echo "Họ và tên: $name<br>";
		echo "Số điện thoại: $mobile<br>";
		echo "Địa chỉ: $country<br>";
		echo "Email: $email<br>";
		echo "Giới tính: $gender<br>";
	} else {
?>


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
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	</head>
	<body>
		<br/> <br/>
		<div class="container-fluid col-md-6 col-md-push-3">
			<form action="" method="POST" role="form" id="update-form">
				<legend class="text-center">Thực hành gửi dữ liệu dùng POST</legend>
				<br/>
				<div class="form-group">
					<label for="">Mã sinh viên</label>
					<input type="text" class="form-control" id="id" placeholder="" name="id" required>
				</div>
				<div class="form-group">
					<label for="">Họ tên sinh viên</label>
					<input type="text" class="form-control" id="name" placeholder="" name="name" required>
				</div>
				<div class="form-group">
					<label for="">Số điện thoại</label>
					<input type="text" class="form-control" id="mobile" placeholder="" name="mobile" required>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" class="form-control" id="email" placeholder="abc@xyz.domain" name="email" required>
				</div>
				<div class="form-group">
					<label for="">Địa chỉ</label>
					<input type="text" class="form-control" id="country" placeholder="" name="country" required>
				</div>		
				<div class="form-group">
					<label for="">Giới tính</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender" class="gender" id="" value="Male" checked="checked"><span >Male</span>
							<input type="radio" name="gender" class="gender" id="" value="Female" checked=""><span>Female</span>
							<input type="radio" name="gender" class="gender" id="" value="Other" checked=""><span>Other</span>					
						</label>
					</div>
				</div>	
			
				<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
			</form>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#update-form').validate({
						rules: {
							id: "required",
							name: "required",
							mobile: {
								minlength: 10,
								maxlength: 12,
							},
							email:{
								required: true,
								email: true,
							},
							country: "required",
						},
						messages: {
							
							mobile:{
								minlength: "Số điện thoại không hợp lệ",
							},
							email:{
								email: "Email không hợp lệ",
							},
						}
					});
				});
			</script>
			<style type="text/css" media="screen">
				.radio input{
					margin-right: 100px!important; 
				}
			</style>
		</div>	
	</body>
	
</html>
<?php } ?>