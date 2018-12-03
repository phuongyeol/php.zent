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

    <form action="?mod=products&act=update&id=<?php echo $product['id'] ?>" method="POST" role="form">

      <input type="hidden" class="form-control" name="id" value="<?php echo $product['id'] ?>">

      <div class="form-group">
        <legend for="" class="text-left">Code</legend>
        <input type="text" class="form-control" id="code" placeholder="" name="code" class="" value="<?php echo $product['code'] ?>">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Name</legend>
        <input type="text" class="form-control" id="name" placeholder="" name="name" class="" value="<?php echo $product['name'] ?>">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Color</legend>
        <input type="text" class="form-control" id="color" placeholder="" name="color" class="" value="<?php echo $product['color'] ?>">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Quantity</legend>
        <input type="number" class="form-control" id="quantity" placeholder="" name="quantity" class="" value="<?php echo $product['quantity'] ?>">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Price</legend>
        <input type="number" class="form-control" id="price" placeholder="" name="price" class="" value="<?php echo $product['price'] ?>">
      </div>
      <div class="form-group">
        <legend for="" class="text-left">Category</legend>
        <select name="category_id" class="form-control">
          <option value="<?php echo $product['category_id'] ?>" name="category_id"><?php echo $product['category_id'] ?></option>
          <?php foreach ($categories as $category) { ?>
          <option value="<?php echo $category['id'] ?>" name="category_id"><?php echo $category['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>