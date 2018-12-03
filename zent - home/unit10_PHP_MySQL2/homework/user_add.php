<?php 

include_once 'connection.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name']; 
  $mobile = $_POST['mobile']; 
  $email = $_POST['email']; 
  $status = $_POST['status']; 
  $password = md5($_POST['password']); 
  $created_at = date('Y-m-d H:i:s');

  $query = "INSERT INTO lecturer_users(name,password,mobile, email, status, created_at)
  VALUES ('".$name."','".$password."','".$mobile."','".$email."','".$status."','".$created_at."');";
  $result = $conn->query($query);

  if ($result) {
    setcookie('add','Success!',time()+3);
    
  } else{
    setcookie('add','Failed!',time()+3);
  }
  header('Location: user_manage.php');
} 
?>