<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Thêm user</li>
     </ol>
	<form action="?mod=user&&act=store" method="POST">

          <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter name">          
          </div>

          <div class="form-group">
                <label>Address</label>
                <input class="form-control" name="address" type="text" placeholder="Enter Address">          
          </div>
          <div class="form-group">
            <label >Email address</label>
            <input class="form-control" name="email" type="email" splaceholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label >Password</label>
                <input class="form-control" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label >Confirm password</label>
                <input class="form-control" name="cfpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <!-- <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div> -->
          <input type="submit" name="submit" class="btn btn-success form-control" value="Thêm">
          <?php 
            //include('public/recapcha/recapcha.php'); 
          ?>

	</form>
<?php 
  include_once('views/layout/footer.php');
?>