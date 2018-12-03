<?php 

include_once 'connection.php';
  
if (isset($_POST['submit'])) {
  
  // lay gia tri tu post
  $code = $_POST['code'];
  $name = $_POST['name'];
  $color = $_POST['color'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $updated_at = date('Y:m:d H:i:s');

    // cau lenh insert
  $sql = "UPDATE products SET name='".$name."', color='".$color."', quantity='".$quantity."', price='".$price."',updated_at='".$updated_at."' WHERE code = \"".$code."\"";

    // truy van
  $result = $conn->query($sql);
  if ($result) {
    header("location: product_manage.php");
  }else{
    echo "Du lieu bi loai";
  }
}

?>