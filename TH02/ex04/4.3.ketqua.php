<?php 
	session_start();
	$ketqua = $_SESSION['ketqua'];
	if ($ketqua == 1) {
        $toantu = $_SESSION['toantu'];
		$numb01 = $_SESSION['numb01'];
        $numb02 = $_SESSION['numb02'];

        if ($toantu == "Cộng") {
            $ketqua = $numb01+$numb02;
        }elseif ($toantu == "Trừ") {
            $ketqua = $numb01-$numb02;
        }elseif ($toantu == "Nhân") {
            $ketqua = $numb01*$numb02;
        }elseif ($toantu == "Chia") {
            $ketqua = $numb01/$numb02;
        }    
	}else{
		header('Location: 4.3.tinh.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    
   <div class="container">
        <table class="table table-border">
             <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
            <legend>PHÉP TÍNH TRÊN HAI SỐ </legend>
            <thead>
                <tr>
                    <th>Số thứ nhất</th>
                    <th>Số thứ hai</th>
                    <th>Toán Tử</th>
                    <th>Kết quả</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for=""><?php echo $numb01 ?></label></td>
                    <td><label for=""><?php echo $numb02 ?></label></td>
                    <td><label for=""><?php echo $toantu ?></label></td>
                    <td><label for=""><?php echo $ketqua ?></label></td>
                </tr>
            </tbody>
         </table>        
         <a href="4.3.tinh.php" class="btn btn-primary" name="logout">Back</a>
       
    </div>

</body>
</html>