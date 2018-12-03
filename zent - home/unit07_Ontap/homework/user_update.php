<?php include_once 'header.php'; ?>

<?php 
    $id = $_GET['id'];
    $user = $_SESSION['user'][$id];

    if (isset($_POST['submit'])) {
        if (array_key_exists($_POST['id'],$_SESSION['user'])!=true) {
            $_SESSION['user'][$_POST['id']]=array(
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'address' => $_POST['address'],
            );
            unset($_SESSION['user'][$id]);
            echo "<pre>";
            print_r($_SESSION['user']);
            echo "</pre>";
            
        } else {
            
        }
        header('Location: user.php');
    }

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">USER</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Warning!</strong> <?php echo $_COOKIE['msg'] ?>
        </div>
        <?php } ?>
        <form action="" method="POST" role="form">
            <legend><h4>Cập nhật thông tin người dùng</h4></legend>
            
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $id ?>" name="id">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $user['name'] ?>" name="name">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $user['phone'] ?>" name="phone">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $user['email'] ?>" name="email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="" value="<?php echo $user['address'] ?>" name="address">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>