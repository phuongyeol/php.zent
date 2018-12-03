<?php include_once '2.header.php'; ?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">USER</h1>
                <div class="text-right">
                    <a href="user_add.php" title="" class="btn btn-primary">Add</a>
                </div>    
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div>

            <?php if (isset($_SESSION['user'])&&count($_SESSION['user'])>0) { ?>
            <table  id="table_dt" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $users = $_SESSION['user'] ?>
                    <?php foreach ($users as $key => $user) {    ?>
                    <tr>
                        <td><?php echo $key ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['phone'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['address'] ?></td>
                        <td>
                            <a class="btn btn-info" data-toggle="modal" href='#modal-id'>Detail</a>
                            <div class="modal fade" id="modal-id">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title text-uppercase">User info</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <h3 class="text-center">Thông tin người sử dụng</h3>
                                                <br>
                                                <tbody>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td><?php echo $key ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td><?php echo $user['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><?php echo $user['phone'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?php echo $user['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td><?php echo $user['address'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="user_update.php?id=<?php echo $key ?>" title="button" class="btn btn-warning">Edit</a>
                            <a href="" title="button" class="btn btn-danger" id="user_del" type="button">Delete</a>
                            <!-- <button  class="btn btn-danger" id="user_del">Delete</button> -->
                            <script>
                                $(document).ready(function() {
                                    $('#table').DataTable();
                                    $('#user_del').click(function(){
                                        swal({
                                          title: "Are you sure?",
                                          text: "Once deleted, you will not be able to recover this imaginary file!",
                                          icon: "warning",
                                          buttons: true,
                                          dangerMode: true,
                                      })
                                        .then((willDelete) => {
                                          if (willDelete) {
                                            swal("Poof! Your imaginary file has been deleted!", {
                                              icon: "success",
                                          });
                                        } else {
                                            swal("Your imaginary file is safe!");
                                        }
                                    });
                                    });

                                } );
                            </script>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
            <?php } else {?>
            <?php echo "Has 0 user" ?>
            <?php } ?>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once '4.footer.php'; ?>