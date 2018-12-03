<?php 
    include_once 'ad_header.php'; 
    include_once 'connection.php';
    $query = "SELECT * FROM news;";
    $result= $conn->query($query);
    // Phân Trang: 
      $number_post_in_page = 5;
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
      }else{
        $page = 1;
      }

      $start = ($page - 1)*$number_post_in_page;
      $sql = "SELECT * FROM news LIMIT $start,$number_post_in_page;";
      $result= $conn->query($sql);
      
      // Xác định tổng số bản ghi: 
      $sql1 = "SELECT count(*) AS SUM_ROWS from news";
      $result2 = $conn->query($sql1)->fetch_assoc();
      $sum_rows = $result2['SUM_ROWS'];
      $sum_pages = ceil($sum_rows/$number_post_in_page);
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> POST MANAGER
                    <span class="text-right"><a href="ad_post_insert.php" title="Add new post" class="fa fa-plus btn btn-warning text-right" ></a></span>
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
                    <th class="text-center">Short Content</th>
                    <!-- <th class="text-center">Content</th> -->
                    <th class="text-center">Image</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><b><?php echo $row['title'] ?><b></td>
                    <td><?php echo $row['short_content'] ?></td>
                    <td class="text-left"><?php echo ($row['image']) ?></td>
                    <td class="text-left"><?php echo ($row['author']) ?></td>
                    <td class="text-left">
                        <a href="user_post_detail.php?id=<?php echo $row['id'] ?>" title="Detail" class="btn btn-sm btn-success fa fa-info"></a>
                        <a href="ad_post_update.php?id=<?php echo $row['id'] ?>" title="edit" class="btn btn-sm btn-primary fa fa-wrench"></a>
                        <a href="ad_post_delete.php?id=<?php echo $row['id'] ?>" title="Delete" class="btn btn-sm btn-danger fa fa-trash"></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.container-fluid -->
  <!-- Phân trang -->
</div>
<!-- /#page-wrapper -->
 
<?php include_once 'ad_footer.php'; ?>