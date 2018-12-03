<?php 
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$count=$_POST['count'];
		$price=$_POST['price'];
		echo "<h3>Thông tin sản phẩm</h3>"."</br>";
		echo "Mã SP: $id"."</br>";
		echo "Tên SP: $name"."</br>";
		echo "Số lượng: $count"."</br>";
		echo "Gía thành: $price"."</br>";
	}
	else{
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
	</head>
	<body>
		<div class="container">
			<div style="height: 100px">
				
			</div>
			<form action="" method="POST" role="form">
				<legend>Form title</legend>
			
				<div class="form-group">
					<label for="">Mã Sp</label>
					<input type="text" class="form-control" id="id" placeholder="Input field" name="id" required="">
				</div>
				<div class="form-group">
					<label for="">Tên Sp</label>
					<input type="text" class="form-control" id="name" placeholder="Input field" name="name" required="">
				</div>
				<div class="form-group">
					<label for="">Số lượng</label>
					<input type="number" class="form-control" id="count" placeholder="Input field" name="count" required="">
				</div>
				<div class="form-group">
					<label for="">Gía thành</label>
					<input type="number" class="form-control" id="price" placeholder="Input field" name="price" required="">
				</div>	
				<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
			</form>
		</div>
	</body>
</html>
<?php  } ?>