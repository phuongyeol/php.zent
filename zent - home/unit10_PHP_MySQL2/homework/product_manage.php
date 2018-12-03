<?php 
include_once 'header.php'; 
include_once 'connection.php';
// $query = "SELECT * FROM products;";
$query = "SELECT  P.id, P.`name`, P.`code`, P.color,P.price, P.quantity, P.created_at, P.updated_at,  P.category_id, C.description, C.`name` category_name, C.`code` category_code
FROM products P, categories C
WHERE P.category_id=C.id;";
$result= $conn->query($query);

$query2 = "SELECT * FROM categories;";
$categories = $conn->query($query2);

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PRODUCTS
                    <span class="text-right"><a href="product_add_form.php" title="Add new product" class="fa fa-plus btn btn-warning text-right" ></a></span>
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
        

        <table class="table table-hover">
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
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['code'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['category_id'] ?></td>
                    <td><?= $row['color'] ?></td>
                    <td class="text-right"><?= number_format($row['quantity']) ?></td>
                    <td class="text-right"><?= number_format($row['price']) ?></td>
                    <td class="text-center">
                        <a href="" title="Detail" class="btn btn-sm btn-success fa fa-info" data-toggle="modal" data-target="#myModal_<?php echo $row['code'] ?>"></a>

                        <!-- <button type="button" class="btn btn-info btn-lg" >Open Modal</button> -->

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
                                        <label for="">Detail</label>
                                        
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
                                                    <td style="font-weight: bold;">Category</td>
                                                    <td class="text-left"><?= $row['category_name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight: bold;">Description</td>
                                                    <td class="text-left"><?= $row['description'] ?></td>
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
                        <a href="" title="edit" class="btn btn-sm btn-primary fa fa-wrench" data-toggle="modal" data-target="#myModalUpdate_<?php echo $row['code'] ?>"></a>
                        <!-- Modal -->
                        <div id="myModalUpdate_<?php echo $row['code'] ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Update Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="product_update.php" method="POST" role="form">

                                            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">

                                            <div class="form-group">
                                                <label for="" class="text-left">Code</label>
                                                <input type="text" class="form-control" id="code" placeholder="" name="code" class="" value="<?php echo $row['code'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left">Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="" name="name" class="" value="<?php echo $row['name'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left">Color</label>
                                                <input type="text" class="form-control" id="color" placeholder="" name="color" class="" value="<?php echo $row['color'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left">Quantity</label>
                                                <input type="number" class="form-control" id="quantity" placeholder="" name="quantity" class="" value="<?php echo $row['quantity'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="text-left">Price</label>
                                                <input type="number" class="form-control" id="price" placeholder="" name="price" class="" value="<?php echo $row['price'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <select name="category_id" >
                                                    <option value="<?php echo $row['category_id'] ?>" ><?php echo $row['category_name'] ?></option>
                                                    <?php while ($category = $categories->fetch_assoc()) {  ?>
                                                    <option value="<?php echo $category['id'] ?>" ><?php echo $category['name'] ?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                                        </form>
                                    </div>
                                    <!-- <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <a href="delete.php?code=<?php echo $row['code'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash delete"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>