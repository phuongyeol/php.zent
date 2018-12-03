<meta charset="utf-8">
<?php 
        if (isset($_POST['save'])) {
            $mssv = $_POST['mssv'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $sex = $_POST['sex'];      
            $addr = $_POST['addr'];
            echo "
                <legend>THÔNG TIN SINH VIÊN:</legend>
                <table >
                    <tr><td>1. Mã số sinh viên</td><td>: $mssv</td></tr>
                    <tr><td>2. Họ và tên </td><td>: $name</td></tr>
                    <tr><td>3. Số điện thoại </td><td>: $phone</td></tr>
                    <tr><td>4. Email: </td><td>: $email</td></tr>
                    <tr><td>5. Giới tính: </td><td>: $sex</td></tr>
                    <tr><td>6. Địa chỉ: </td><td>: $addr</td></tr>
                </table>
            ";
        }
?>