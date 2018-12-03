<?php 
include_once 'connection.php';
if (isset($_POST['submit'])) {

  $code = $_POST['code'];
  $name = $_POST['name'];
  $color = $_POST['color'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $created_at = date('Y:m:d H:i:s');    
  $updated_at = date('Y:m:d H:i:s');

  $query = "SELECT * FROM products WHERE code = \"".$code."\";";
  $result = $conn->query($query);
  echo "<pre>";
    print_r($result);
  echo "</pre>";
    
  if (count($result->fetch_assoc())==0) {
    $query = "INSERT INTO products(code,name,color,quantity,price,created_at,updated_at)
    VALUES ('".$code."','".$name."','".$color."',".$quantity.",".$price.",'".$created_at."','".$updated_at."')";
    $result=$conn->query($query); 
    
    if ($result) {
      header("location: product_manage.php");
    }else{
      header("location: product_manage.php");
      echo "Du lieu bi loai";

    }           
  } 
  header("location: product_manage.php");
}
?>