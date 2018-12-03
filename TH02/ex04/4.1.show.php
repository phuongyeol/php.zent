<?php 
	session_start();
	$show = $_SESSION['show'];
	if ($show == 1) {
		$name = $_SESSION['name'];
        $gender = $_SESSION['gender'];
	}else{
		header('Location: 4.1.index.php');
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
            <legend>SHOW FORM- 20156275 - TRẦN THỊ PHƯƠNG</legend>
            <thead>
            	<tr>
            		<th>NAME</th>
            		<th>GENDER</th>
            	</tr>
            </thead>
            <tbody>
            	<tr>
					<td><label for=""><?php echo $name ?></label></td>
					<td><label for=""><?php echo $gender ?></label></td>
				</tr>
            </tbody>
         </table>        
         <a href="4.1.index.php" class="btn btn-primary" name="logout">Logout</a>
       
    </div>

</body>
</html>