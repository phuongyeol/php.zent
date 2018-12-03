<?php 
    include_once 'ad_header.php';
    include_once 'connection.php';

    $id=$_GET['id'];
    $_SESSION['id']=$id;
    // cau lenh 
    $sql = "SELECT * FROM news WHERE id=\"".$id."\"";

    // truy van
    $result = $conn->query($sql);
    $row = $result->fetch_assoc(); 
?>

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">POST</h1>

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    
    <form action="ad_post_doupdate.php" method="POST" role="form">
     <legend>
      <span class="text-right">
        <a href="ad_product_manage.php" title="Back to list" class="btn btn-success text-right fa fa-undo" ></a>
      </span>
    Update Product
  </legend>

    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
    <div class="form-group">
     <label for="">ID: <?php echo $row['id'] ?></label>

   </div>
   <div class="form-group">
     <label for="">Title</label>
     <input type="text" class="form-control" placeholder="" name="title" class="" value="<?php echo $row['title'] ?>">
   </div>
   <div class="form-group">
     <label for="">Short Content</label>
     <input type="text" class="form-control" placeholder="" name="short_content" class="" value="<?php echo $row['short_content'] ?>">
   </div>
   <div class="form-group">
     <label for="">Content</label>
     <input type="text" class="form-control"  placeholder="" name="content" class="" value="<?php echo $row['content'] ?>">
   </div>
   <div class="form-group">
     <label for="">Image</label>
     <input type="text" class="form-control" placeholder="" name="image" class="" value="<?php echo $row['image'] ?>">
   </div>
   <div class="form-group">
     <label for="">Author</label>
     <input type="text" class="form-control" placeholder="" name="author" class="" value="<?php echo $row['author'] ?>">
   </div>


   <button type="submit" class="btn btn-primary" name="submit">Update</button>
 </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

