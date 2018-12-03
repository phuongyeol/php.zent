<?php 
include_once 'views/layouts/header.php'; 
?>

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">USERS</h1>

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <form action="?mod=users&act=update&id=<?php echo $user['id'] ?>" method="POST" role="form" name="user_edit_form">

      <input type="hidden" class="form-control" name="id" value="<?php echo $user['id'] ?>">

      <div class="form-group">
        <label for="" class="text-left">ID: <?php echo $user['id'] ?></label>

      </div>
      <div class="form-group">
        <label for="" class="text-left">Name</label>
        <input type="text" class="form-control" id="name" placeholder="" name="name" class="" value="<?php echo $user['name'] ?>">
      </div>
      <div class="form-group">
        <label for="" class="text-left">Email</label>
        <input type="text" class="form-control" id="email" placeholder="" name="email" class="" value="<?php echo $user['email'] ?>">
      </div>
      <div class="form-group">
        <label for="" class="text-left">Mobile</label>
        <input type="number" class="form-control" id="mobile" placeholder="" name="mobile" class="" value="<?php echo $user['mobile'] ?>">
      </div>
      <div class="form-group">
        <label for="" class="text-left">Status</label>
        <select name="status" class="form-control">
          <?php if ($user['status']=='Active'){  ?>
          <option value="1">Active</option>
          <option value="0">Deactive</option>
          <?php } else {  ?>

          <option value="0">Deactive</option>
          <option value="1">Active</option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="" class="text-left">Gender</label>
        <select name="gender" class="form-control">
          <?php if ($user['gender']=='Male'){  ?>
          <option value="1">Male</option>
          <option value="0">Female</option>
          <?php } else {  ?>

          <option value="0">Female</option>
          <option value="1">Male</option>
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