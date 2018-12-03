
<?php 
    if (isset($_POST['submit'])) {
        if (isset($_POST['month']) && isset($_POST['year']) ) {
           $month = $_POST['month'];
           $year = $_POST['year'];
           $day = 31;
           if ($month==4 || $month == 6 || $month == 9 || $month == 11) $day=30 ;
           if ($month == 2 && $year%4 ==0) $day=29;
           if ($month == 2 && $year%4 !=0) $day=28;

           $ketqua = "Tháng $month năm $year có $day ngày!";
        }else if (!isset($_POST['month'])) {
            echo "<br> Error: Bạn chưa nhập tháng </h3> ";
        }elseif (!isset($_POST['year'])) {
            echo "<br> Error: Bạn chưa nhập năm</h3> ";
        }
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
        <legend>20156275 - TRẦN THỊ PHƯƠNG</legend>
        <legend>TÍNH NGÀY TRONG THÁNG</legend>
            <table class="table table-border">
            <form action="4.7.count_day.php" method="POST" role="form" name="hoctap">
                <tbody>
                    <tr class="form-group">
                        <td><label for="">Tháng / Năm: </label></td>
                        <td>
                            <select name="month" class="form-control" style="width: 100px;">
                                <option value="1" <?php if (isset($month )&&$month == 1 ){echo "selected";}?> >1</option>
                                <option value="2" <?php if (isset($month) &&$month == 2 ){echo "selected";}?> >2</option>
                                <option value="3" <?php if (isset($month) &&$month == 3 ){echo "selected";}?> >3</option>
                                <option value="4" <?php if (isset($month) &&$month == 4 ){echo "selected";}?>>4</option>
                                <option value="5" <?php if (isset($month) &&$month == 5 ){echo "selected";}?>>5</option>
                                <option value="6" <?php if (isset($month) &&$month == 6 ){echo "selected";}?>>6</option>
                                <option value="7" <?php if (isset($month) &&$month== 7 ){echo "selected";}?>>7</option>
                                <option value="8" <?php if (isset($month) &&$month== 8 ){echo "selected";}?>>8</option>
                                <option value="9" <?php if (isset($month) &&$month== 9 ){echo "selected";}?>>9</option>
                                <option value="10" <?php if (isset($month) &&$month== 10 ){echo "selected";}?>>10</option>
                                <option value="11" <?php if (isset($month) &&$month== 11 ){echo "selected";}?>>11</option>
                                <option value="12" <?php if (isset($month )&&$month== 12 ){echo "selected";}?>>12</option>
                            </select>
                        <td>
                        <td>
                            <input type="number" class="form-control" placeholder="Nhập vào năm" name="year" value="<?php if (isset($_POST['submit'])) {echo $year;} ?>">
                        </td>                
                    </tr> 
                    <tr class="form-group">
                        <td><button type="submit" class="btn btn-primary" name="submit">Tính số ngày</button><td>
                        <td colspan="2"><input type="text" class="form-control" id="" readonly="true" name="ketqua" value="<?php if (isset($_POST['submit'])) {echo $ketqua;} ?>"></td>
                        <td></td>
                    </tr>
                </tbody>
            </form>
        </table>
        
    </div>

</body>
</html>