<?php 
  include_once('views/layout/header.php');
?>
  <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Thông tin chi tiết</li>
     </ol>
  <div class="container">  

          <div  class="form-group">
            <h2> Name: <?php echo $user['name']; ?></h2>
            <h2> Email: <?php echo $user['email']; ?></h2>
            <h2> Address: <?php echo $user['address']; ?></h2>
            <h2>  Date: <?php echo $user['date']; ?></h2>      
          </div>
    </div>

<?php 
  include_once('views/layout/footer.php');
?>