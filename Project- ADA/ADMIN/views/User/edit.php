<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sửa user</li>
     </ol>
	<form action="?mod=user&act=update&id=<?= $user['id']?>" method="POST">

          <div class="container">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter name" value="<?= $user['name']?>">          
            </div>

            <div class="form-group">
                  <label>Address</label>
                  <input class="form-control" name="address" type="text" placeholder="Enter Address" value="<?= $user['address']?>">          
            </div>
            <div class="form-group">
              <label >Email address</label>
              <input class="form-control" name="email" type="email" splaceholder="Enter email" value="<?= $user['email']?>">
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label >Password</label>
                  <input class="form-control" name="password" type="password" placeholder="Password" value="<?= $user['password']?>">
                </div>
                <div class="col-md-6">
                  <label >Confirm password</label>
                  <input class="form-control" name="cfpassword" type="password" placeholder="Confirm password" value="<?= $user['password']?>">
                </div>
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-success form-control" value="Sửa">
          </div>

	</form>
<?php 
	include_once('views/layout/footer.php');
?>