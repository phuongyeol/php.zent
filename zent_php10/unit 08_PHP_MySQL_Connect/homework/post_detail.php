<?php 
include '2.header.php'; 
include_once 'connection.php';
$id = $_GET['id'];

$query = "SELECT * FROM news WHERE id = \"$id\" ";

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
                <a href="post_manage.php" title="Back to list" class="btn btn-success text-right fa fa-undo" ></a>
            </span>
            Thông tin chi tiết bài viết
        </h4>
        <br>
        <table class="table table-hover">

            <?php while ($row= $result->fetch_assoc()) { ?>
            <tr>
                <td>id</td>
                <td><?= $row['id'] ?></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><?= $row['title'] ?></td>
            </tr>
            <tr>
                <td>SHort Content</td>
                <td><?= $row['short_content'] ?></td>
            </tr>
            <tr>
                <td>content</td>
                <td><?= $row['content'] ?></td>
            </tr>
            <tr>
                <td>Image</td>
                <td><?= $row['image'] ?></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><?= $row['author'] ?></td>
            </tr>
            <?php } ?>
        </table>
        
        
        
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once '4.footer.php'; ?>