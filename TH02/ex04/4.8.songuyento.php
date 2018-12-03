
<?php 
    function kiemtra($t){
        $dem = 0;
        for ($i=2; $i < $t; $i++) { 
            if ($t%$i == 0)  $dem++;
            if ($dem == 0) {
                return true;
            }else return false;
        }
    } 
    if (isset($_POST['submit'])) {
        if (isset($_POST['n']) ) {
           $n = $_POST['n'];
           $ketqua = "";
           for ($i=2; $i <$n; $i++) { 
               if (kiemtra($i)) {
                   $ketqua = $ketqua."&emsp;".$i;
               }
           }
           $ketqua = $ketqua." là các số nguyên tố cần tìm";
        }else if (!isset($_POST['n'])) {
            echo "<br> Error: Bạn chưa nhập N </h3> ";
        }
    }else{
        $ketqua = "";
        $n="";
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
            <form action="4.8.songuyento.php" method="POST" role="form" name="hoctap">
                <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
                <legend>TÌM SỐ NGUYÊN TỐ</legend>

                <tbody>
                    <tr class="form-group">
                        <td><label for="">Nhập N: </label></td>
                        <td><input type="number" class="form-control" placeholder="Nhập vào N" name="n" value="<?php if (isset($_POST['submit'])) {echo $n;} ?>"></td>                
                    </tr> 
                    <tr class="form-group">
                        <td><button type="submit" class="btn btn-primary" name="submit">Các số nguyên tố nhỏ hơn N:</button></td>
                        <td colspan="2"><input type="text" class="form-control" id="" readonly="true" name="ketqua" value="<?php if (isset($_POST['submit'])) {echo $ketqua;} ?>"></td>
                    </tr>
                </tbody>
            </form>
        </table>
        
    </div>

</body>
</html>