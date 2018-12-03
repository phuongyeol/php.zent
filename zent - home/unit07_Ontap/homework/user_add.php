<?php include_once 'header.php'; ?>

<?php 
    $users = $_SESSION['user'];
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        if (in_array($id,$users)) {
            // setcookie('msg','ADD Fail',time()+3);
        } else {
            $user = array(
                'name' =>$_POST['name'],
                'phone' =>$_POST['phone'],
                'email' =>$_POST['email'],
                'address' =>$_POST['address'],
            );
            $_SESSION['user'][$id]=$user;
                            
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
        <div> 
            <form action="" method="POST" role="form">
                <legend>ADD A NEW USER</legend>

                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" name="id">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" name="name">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" name="phone">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" name="email">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="" placeholder="Input field" name="address">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>