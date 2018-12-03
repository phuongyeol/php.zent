<?php 
include_once 'header.php';
include_once 'connection.php';
$query  = "SELECT * FROM lecturer_users;";
$result=$conn->query($query);

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    USER 
                    <span class="text-right"><a href="user_add_form.php" title="Add new user" class="fa fa-plus btn btn-warning text-right" ></a></span>
                </h1> 
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="col-lg-11">
            <?php if (isset($_COOKIE['add'])) { ?>
            <div class="alert alert-success">
                <strong>Info!</strong> <?php echo $_COOKIE['add'] ?>
            </div>
            <?php } ?>
            <?php if (isset($_COOKIE['update'])) { ?>
            <div class="alert alert-success">
                <strong>Info!</strong> <?php echo $_COOKIE['update'] ?>
            </div>
            <?php } ?>
            <?php if (isset($_COOKIE['delete'])) { ?>
            <div class="alert alert-success">
                <strong>Info!</strong> <?php echo $_COOKIE['delete'] ?>
            </div>
            <?php } ?>
        </div>
        <div>


            <table  id="table_dt" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Email</th>
                        <!-- <th class="text-center">Password</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php while($user=$result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['mobile'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        
                        
                        <td class="text-center">
                            <a href="" title="Detail" class="btn btn-sm btn-success fa fa-info" data-toggle="modal" data-target="#myModal_<?php echo $user['id'] ?>"></a>
                            <!-- <a class="btn btn-info" data-toggle="modal" href='#modal-id'></a> -->
                            <div class="modal fade" id="myModal_<?php echo $user['id'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title text-uppercase">User info</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <!-- <h3 class="text-center">Thông tin người sử dụng</h3> -->
                                                <br>
                                                <tbody>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td><?php echo $user['id'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td><?php echo $user['name'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><?php echo $user['mobile'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><?php echo $user['email'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password</td>
                                                        <td><?php echo $user['password'] ?></td>
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
                            <a href="" title="edit" class="btn btn-sm btn-primary fa fa-wrench" data-toggle="modal" data-target="#myModalUpdate_<?php echo $user['id'] ?>"></a>
                            <!-- Modal -->
                            <div id="myModalUpdate_<?php echo $user['id'] ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Update User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="user_edit.php" method="POST" role="form" name="user_edit_form">

                                                <!-- <input type="hidden" class="form-control" name="id" value="<?php echo $user['id'] ?>"> -->

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
                                                    <input type="number" class="form-control" id="quantity" placeholder="" name="mobile" class="" value="<?php echo $user['mobile'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="text-left">Status</label>
                                                    <input type="number" class="form-control" id="status" placeholder="" name="status" class="" value="<?php echo $user['status'] ?>">
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a href="user_delete.php?id=<?php echo $user['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash delete"></a>
                            <!-- <button  class="btn btn-danger" id="user_del">Delete</button> -->
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>