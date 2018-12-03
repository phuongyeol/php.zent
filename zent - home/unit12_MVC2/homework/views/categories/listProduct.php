<?php 
include_once 'views/layouts/header.php'; 

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PRODUCTS
                    <span class="text-right"><a href="?mod=products&act=add" title="Add new product" class="fa fa-plus btn btn-warning text-right" ></a></span>
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
        

        <table class="table table-hover table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th class="text-center">Code</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category_ID</th>
                    <th class="text-center">Color</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) {  ?>
                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['category_id'] ?></td>
                    <td><?= $row['color'] ?></td>
                    <td class="text-right"><?= number_format($row['quantity']) ?></td>
                    <td class="text-right"><?= number_format($row['price']) ?></td>
                    <td class="text-center">
                        <a href="" title="Detail" class="btn btn-sm btn-success fa fa-info" data-toggle="modal" data-target="#myModal_<?php echo $row['code'] ?>"></a>

                        <!-- Modal -->
                        <div id="myModal_<?php echo $row['code'] ?>" class="modal fade myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Product's information</h4>
                                    </div>
                                    <div class="modal-body">
                                        <legend for="">Detail</legend>
                                        
                                        <table class="table table-hover">
                                            <tbody class="text-left">
                                                <tr>
                                                    <td style="font-weight: bold;">Code</td>
                                                    <td><?= $row['code'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Name</td>
                                                    <td><?= $row['name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Category_ID</td>
                                                    <td class="text-left"><?= $row['category_id'] ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td style="font-weight: bold;">Color</td>
                                                    <td><?= $row['color'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Quantity</td>
                                                    <td class="text-left"><?= number_format($row['quantity']) ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Price</td>
                                                    <td class="text-left"><?= number_format($row['price']) ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td style="font-weight: bold;">Created time</td>
                                                    <td><?= $row['created_at'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Updated time</td>
                                                    <td><?= $row['updated_at'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="?mod=products&act=edit&id=<?php echo $row['id'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench" data-toggle="modal" data-target=""></a>
                        
                        <a href="?mod=products&act=delete&id=<?php echo $row['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash delete"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>