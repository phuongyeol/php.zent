<?php 
include_once 'header.php';
include_once 'connection.php';

$id=$_GET['code'];
$_SESSION['id']=$id;
// cau lenh 
$sql = "SELECT * FROM products WHERE code=\"".$id."\"";

    // truy van
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
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
    
    <form action="edit.php" method="POST" role="form">
     <legend>
      <span class="text-right">
        <a href="product_manage.php" title="Back to list" class="btn btn-success text-right fa fa-undo" ></a>
      </span>
    Update Product
  </legend>

    <input type="hidden" class="form-control" name="code" value="<?php echo $row['code'] ?>">
    <div class="form-group">
     <label for="">Code: <?php echo $row['code'] ?></label>

   </div>
   <div class="form-group">
     <label for="">Name</label>
     <input type="text" class="form-control" id="name" placeholder="" name="name" class="" value="<?php echo $row['name'] ?>">
   </div>
   <div class="form-group">
     <label for="">Color</label>
     <input type="text" class="form-control" id="color" placeholder="" name="color" class="" value="<?php echo $row['color'] ?>">
   </div>
   <div class="form-group">
     <label for="">Quantity</label>
     <input type="number" class="form-control" id="quantity" placeholder="" name="quantity" class="" value="<?php echo $row['quantity'] ?>">
   </div>
   <div class="form-group">
     <label for="">Price</label>
     <input type="number" class="form-control" id="price" placeholder="" name="price" class="" value="<?php echo $row['price'] ?>">
   </div>


   <button type="submit" class="btn btn-primary" name="submit">Update</button>
 </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

