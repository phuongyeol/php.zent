<?php 
    include_once '2.header.php'; 
    include_once 'connection.php';
    $query = "SELECT * FROM news;";
    $result= $conn->query($query);

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Danh sách bài viết
                    <span class="text-right"><a href="post_add.php" title="Add new post" class="fa fa-plus btn btn-warning text-right" ></a></span>
                </h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Short_content</th>
                    <th class="text-center">Content</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['short_content'] ?></td>
                    <td class="text-right"><?php echo ($row['content']) ?></td>
                    <td class="text-right"><?php echo ($row['image']) ?></td>
                    <td class="text-right"><?php echo ($row['author']) ?></td>
                    <td class="text-center">
                        <a href="post_detail.php?id=<?php echo $row['id'] ?>" title="Detail" class="btn btn-sm btn-success fa fa-info"></a>
                        <a href="post_edit.php?id=<?php echo $row['id'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench"></a>
                        <a href="post_delete.php?id=<?php echo $row['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once '4.footer.php'; ?>