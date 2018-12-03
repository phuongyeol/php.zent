<?php 
include_once 'connection.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  // lay gia tri tu post
  // $new_id = $_POST['new_id'];
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $status = $_POST['status'];
  $updated_at = date('Y:m:d H:i:s');
  

    // cau lenh insert
  $sql = "UPDATE lecturer_users SET name='".$name."', mobile='".$mobile."', email='".$email."', status=".$status.", updated_at='".$updated_at."' WHERE id=".$id.";";

  
    // truy van
  $result = $conn->query($sql);

  if ($result) {
    setcookie('update','Success!',time()+3);
    
  }else{
    setcookie('update','Failed!',time()+3);
  }
  header("location: user_manage.php");
}

?>