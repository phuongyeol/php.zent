<?php 

include_once 'connection.php';
  
if (isset($_POST['submit'])) {
  
  // lay gia tri tu post
  $id = $_POST['id'];
  $title = $_POST['title'];
  $short_content = $_POST['short_content'];
  $content = $_POST['content'];
  $image = $_POST['image'];
  $author = $_POST['author'];
  

    // cau lenh insert
  $sql = "UPDATE news SET title='".$title."', short_content='".$short_content."', content='".$content."', image='".$image."',author='".$author."' WHERE id = \"".$id."\"";

    // truy van
  $result = $conn->query($sql);
  if ($result) {
    header("location: ad_post_manage.php");
  }else{
    echo "Du lieu bi loai";
  }
}

?>