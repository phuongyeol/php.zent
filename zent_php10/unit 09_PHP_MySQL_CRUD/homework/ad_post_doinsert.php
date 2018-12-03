<?php 
  include_once 'connection.php';
  if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $short_content = $_POST['short_content'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $author = $_POST['author'];

    $query = "SELECT * FROM news WHERE id = \"".$id."\";";
    $result = $conn->query($query);
    echo "<pre>";
      print_r($result);
    echo "</pre>";
      
    if (count($result->fetch_assoc())==0) {
      $query = "INSERT INTO news(id,title,short_content,content,image,author)
      VALUES ('".$id."','".$title."','".$short_content."',".$content.",".$image.",'".$author."')";
      $result=$conn->query($query); 
      
      if ($result) {
        header("location: ad_post_manage.php");
      }else{
        header("location: ad_post_manage.php");
        echo "Du lieu bi loai";

      }           
    }else{?>
    <div class="alert alert-primary" role="alert">
      ID đã tổn tại. Hãy sử dụng ID khác!
    </div>
    <?php 
    }
    header("location: ad_post_manage.php");
  }
?>
