<?php 
include 'header.php'; 
include_once 'connection.php';
$code = $_GET['code'];

$query = "SELECT * FROM products WHERE code = \"$code\"";

$result = $conn->query($query);

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PRODUCTS</h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        
        
        <h4>
            <span class="text-right">
                <a href="product_manage.php" title="Back to list" class="btn btn-success text-right fa fa-undo" ></a>
            </span>
            Thông tin chi tiết sản phẩm 
        </h4>
        <br>
        <table class="table table-hover">

            <?php while ($row= $result->fetch_assoc()) { ?>
            <tr>
                <td>Code</td>
                <td><?= $row['code'] ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?= $row['name'] ?></td>
            </tr>
            <tr>
                <td>Color</td>
                <td><?= $row['color'] ?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?= $row['quantity'] ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><?= $row['price'] ?></td>
            </tr>
            <?php } ?>
        </table>
        
        
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'footer.php'; ?>