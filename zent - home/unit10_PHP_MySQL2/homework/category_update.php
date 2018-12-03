<?php 
include_once 'connection.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  // lay gia tri tu posts
  $code = $_POST['code'];
  $name = $_POST['name'];
  
  $description = $_POST['description'];
  $updated_at = date('Y:m:d H:i:s');

    // cau lenh insert
  $sql = "UPDATE categories SET code='".$code."', name='".$name."', description='".$description."',updated_at='".$updated_at."' WHERE id='".$id."';";

    // truy van
  $result = $conn->query($sql);
  if ($result) {
    setcookie('update','Success!',time()+3);
    
  }else{
    setcookie('update','Failed!',time()+3);
  }
  header("location: category_manage.php");
}

?>