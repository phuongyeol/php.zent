<?php 
include_once 'connection.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  // lay gia tri tu posts
  $code = $_POST['code'];
  $name = $_POST['name'];
  $color = $_POST['color'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $category_id = $_POST['category_id'];
  $updated_at = date('Y:m:d H:i:s');

    // cau lenh insert
  $sql = "UPDATE products SET code='".$code."', name='".$name."', quantity='".$quantity."', price='".$price."',color='".$color."',updated_at='".$updated_at."', category_id='".$category_id."' WHERE id='".$id."';";

    // truy van
  $result = $conn->query($sql);
  if ($result) {
    setcookie('update','Success!',time()+3);
    
  }else{
    setcookie('update','Failed!',time()+3);
  }
  header("location: product_manage.php");
}

?>