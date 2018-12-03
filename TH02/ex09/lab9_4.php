<!doctype html>
<?php ob_start(); ?>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<?php session_start(); ?>
	<?php $link = mysqli_connect("localhost","root","root","th09_qlbanhang");
		mysqli_set_charset($link,"UTF8");
		
	?>
</head>

<body>
	<div class="container">
		<table class="table table-border">
			<legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
			<h3>Các hóa đơn của nhân viên <?php echo $_SESSION['ten_nv']; ?></h3>
			<tr>
				<th>Mã Nhân viên</th>
				<th>Mã hóa đơn</th>
				<th>Ngày lập hóa đơn</th>
				<th>Mã Khách Hàng</th>
				<th>Ngày giao hàng</th>
				<th>Tổng tiền</th>
			</tr>

			<?php 	
				if(isset($_SESSION["id_nv"])){
					$sql="select * from hoadon where id_nv='".$_SESSION['id_nv']."'";
					$result=mysqli_query($link,$sql);
					$i=0;

					if(	mysqli_num_rows($result)>0){
							while ($row=mysqli_fetch_array($result)){
								$i+=1;
							?>
			                <tr valign="top" align="center">
									<td><?php echo $row["id_nv"]?></td>
									<td><?php echo $row["id_hd"]?></td>
									<td><?php echo $row["ngaylap_hd"]?></td>
									<td><?php echo $row["id_kh"]?></td>
									<td><?php echo $row["ngaygiaohang"]?></td>
									<td><?php echo $row["tongtien"]?></td>

			                </tr>
			                <?php
							}
					}
				}
				 ?>
     	</table>
	</div>
	
<?php ob_end_flush(); ?>
<form name="form1" method="post" action="">
	<a href="#"><div id="ht" name="b"></div></a>	
      <div align="center">
        <input type="button" name="Button" class="btn btn-primary" value="Trở về" onClick="javascript:window.history.back()">
        <input type="button" name="Button" class="btn btn-primary" value="Đăng xuất" onClick="javascript:window.open('Lab9_3.php','_self')">
</body>
</html>
