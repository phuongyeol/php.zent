<?php 
  include 'ad_header.php'; 
  include_once 'connection.php';

  // $id = $_GET['id'];
  // $_SESSION['id']=$id;
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

    <form action="ad_post_doinsert.php" method="POST" role="form">
       <legend>Add New Post</legend>

       <div class="form-group">
         <label for="">ID</label>
         <input type="number" class="form-control" id="id" name="id" class="">
       </div>
       <div class="form-group">
         <label for="">Title</label>
         <input type="text" class="form-control" id="title"  name="title" class="">
       </div>

       <div class="form-group">
         <label for="">Short content</label>
         <input type="text" class="form-control" id="short_content" name="short_content" class="">
       </div>
       <div class="form-group">
         <label for="">Content</label>
         <input type="text" class="form-control" id="content"  name="content" class="">
       </div>
       <div class="form-group">
         <label for="">Image</label>
         <input type="text" class="form-control" id="image"  name="image" class="">
       </div>
       <div class="form-group">
         <label for="">Author</label>
         <input type="text" class="form-control" id="author"  name="author" class="">
       </div>


       <button type="submit" class="btn btn-primary" name="submit">Add</button>
    </form>
 </div>
 <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'ad_footer.php'; ?>