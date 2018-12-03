<?php 
include 'views/layouts/header.php'; 

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

    <form action="?mod=products&act=store" method="POST" role="form">
      <legend>Add new Product</legend>

      <div class="form-group">
        <legend for="">Code</legend>
        <input type="text" class="form-control" id="code" placeholder="Mời bạn nhập mã sản phẩm" name="code" class="">
      </div>
      <div class="form-group">
        <legend for="">Name</legend>
        <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập tên sản phẩm" name="name" class="">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Category</legend>
        <select name="category_id" class="form-control">
          <?php foreach ($categories as $category) { ?>
          <option value="<?php echo $category['id'] ?>" name="category_id"><?php echo $category['code'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <legend for="">Color</legend>
        <input type="text" class="form-control" id="color" placeholder="Mời bạn nhập màu sắc" name="color" class="">
      </div>
      <div class="form-group">
        <legend for="">Quantity</legend>
        <input type="number" class="form-control" id="quantity" placeholder="Mời bạn nhập số lượng" name="quantity" class="">
      </div>
      <div class="form-group">
        <legend for="">Price</legend>
        <input type="number" class="form-control" id="price" placeholder="Mời bạn nhập giá" name="price" class="">
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Add</button>
    </form>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>