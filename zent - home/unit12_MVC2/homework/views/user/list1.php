<?php 
include_once 'views/layouts/header.php';

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    USER 
                    <span class="text-right"><a href="?mod=users&act=add" title="Add new user" class="fa fa-plus btn btn-warning text-right" ></a></span>
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


            <table  id="example"" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Avatar</th>
                        <th class="text-center">Mobile</th>
                        <th class="text-center">Email</th>
                        <!-- <th class="text-center">Password</th> -->
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach ($data as $user) { ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><img width="100px" height="100px" src="upload/user/<?php echo $user['avatar'] ?>" alt=""></td>
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
                                            <h4 class="modal-title text-uppercase">Zent Corp</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <h3 class="text-center">User's informations</h3>
                                                <br>
                                                <tbody>
                                                    <tr class="text-left">
                                                        <td >ID</td>
                                                        <td><?php echo $user['id'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Name</td>
                                                        <td><?php echo $user['name'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Gender</td>
                                                        <?php $user['gender']=($user['gender']==1)?'Male':'Female' ?>
                                                        <td><?php echo $user['gender'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Phone</td>
                                                        <td><?php echo $user['mobile'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Email</td>
                                                        <td><?php echo $user['email'] ?></td>
                                                    </tr>
                                                    <tr class="text-left">
                                                        <td class="text-left">Password</td>
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
                            <a href="?mod=users&act=edit&id=<?php echo $user['id'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench" data-toggle="modal" data-target=""></a>
                            <!-- Modal -->

                            <a href="?mod=users&act=delete&id=<?php echo $user['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash delete"></a>
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
<?php include_once 'views/layouts/footer.php'; ?>