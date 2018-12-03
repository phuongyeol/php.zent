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

    <form action="?mod=users&act=store" method="POST" role="form">
      <legend>Add new User</legend>

      <!-- <div class="form-group">
        <label for="">ID</label>
        <input type="text" class="form-control" id="id" placeholder="Mời bạn nhập khách hàng" name="id" class="">
      </div> -->
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Mời bạn nhập user" name="name" class="">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" id="password" placeholder="Mời bạn nhập mật khẩu" name="password" class="">
      </div>
      <div class="form-group">
        <label for="">Gender</label>
        <div class="radio">
          <label>
            <input type="radio" name="gender" id="inputGender" value="0" >Female
          </label>
          <label>
            <input type="radio" name="gender" id="inputGender" value="1" checked="checked">Male
          </label>
        </div>

        <!-- <input type="number" class="form-control" id="status" placeholder="Mời bạn trạng trái" name="status" class=""> -->
      </div>
      <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" class="form-control" id="mobile" placeholder="Mời bạn SĐT" name="mobile" class="">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Mời bạn nhập email" name="email" class="">
      </div>
      <div class="form-group">
        <label for="">Status</label>
        <div class="radio">
          <label>
            <input type="radio" name="status" id="inputStatus" value="0" checked="checked">Deactive
          </label>
          <label>
            <input type="radio" name="status" id="inputStatus" value="1" checked="checked">Active
          </label>
        </div>

        <!-- <input type="number" class="form-control" id="status" placeholder="Mời bạn trạng trái" name="status" class=""> -->
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Add</button>
    </form>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php include_once 'views/layouts/footer.php'; ?>