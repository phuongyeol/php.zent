<?php 
include 'views/layouts/header.php'; 

?>

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">CATEGORIES</h1>

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <form action="?mod=categories&act=store" method="POST" role="form">
      <legend>Add new Category</legend>

      <div class="form-group">
        <label for="">Code</label>
        <input type="text" class="form-control" id="code" placeholder="Mời bạn nhập mã danh mục" name="code" class="">
      </div>
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập tên sản phẩm" name="name" class="">
      </div>

      <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Mời bạn mô tả" name="description" class="">
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Add</button>
    </form>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>