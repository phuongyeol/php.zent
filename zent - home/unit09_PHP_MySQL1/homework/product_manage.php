<?php 
    include_once 'header.php'; 
    include_once 'connection.php';
    $query = "SELECT * FROM products;";
    $result= $conn->query($query);

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PRODUCTS
                    <span class="text-right"><a href="product_add.php" title="Add new product" class="fa fa-plus btn btn-warning text-right" ></a></span>
                </h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">Code</th>
                    <th class="text-center">Name</th>
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
                    <td><?= $row['color'] ?></td>
                    <td class="text-right"><?= number_format($row['quantity']) ?></td>
                    <td class="text-right"><?= number_format($row['price']) ?></td>
                    <td class="text-center">
                        <a href="product_detail.php?code=<?php echo $row['code'] ?>" title="Detail" class="btn btn-sm btn-success fa fa-info"></a>
                        <a href="product_edit.php?code=<?php echo $row['code'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench"></a>
                        <a href="product_delete.php?code=<?php echo $row['code'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash"></a>
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