<?php 
include 'header.php'; 
include_once 'connection.php';

?>

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">PRODUCTS</h1>

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <form action="product_add.php" method="POST" role="form">
     <legend>Add new Product</legend>

     <div class="form-group">
       <label for="">Code</label>
       <input type="text" class="form-control" id="code" placeholder="Mời bạn nhập mã sản phẩm" name="code" class="">
     </div>
     <div class="form-group">
       <label for="">Name</label>
       <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập tên sản phẩm" name="name" class="">
     </div>
     <div class="form-group">
       <label for="">Color</label>
       <input type="text" class="form-control" id="color" placeholder="Mời bạn nhập màu sắc" name="color" class="">
     </div>
     <div class="form-group">
       <label for="">Quantity</label>
       <input type="number" class="form-control" id="quantity" placeholder="Mời bạn nhập số lượng" name="quantity" class="">
     </div>
     <div class="form-group">
       <label for="">Price</label>
       <input type="number" class="form-control" id="price" placeholder="Mời bạn nhập giá" name="price" class="">
     </div>


     <button type="submit" class="btn btn-primary" name="submit">Add</button>
   </form>
 </div>
 <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>