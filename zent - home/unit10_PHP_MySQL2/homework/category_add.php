<?php 
include_once 'connection.php';
if (isset($_POST['submit'])) {

  $code = $_POST['code'];
  $name = $_POST['name'];

  $description = $_POST['description'];
  $created_at = date('Y:m:d H:i:s');    
  $updated_at = date('Y:m:d H:i:s');


  $query = "INSERT INTO categories(code,name,description,created_at,updated_at)
  VALUES ('".$code."','".$name."','".$description."','".$created_at."','".$updated_at."')";
  $result=$conn->query($query); 
  
  if ($result) {
    setcookie('add','Success!',time()+3);
        // header("location: product_manage.php");
  }else{
    setcookie('add','Failed!',time()+3);
        // header("location: product_manage.php");
  }           

  header("location: category_manage.php");
}
?>