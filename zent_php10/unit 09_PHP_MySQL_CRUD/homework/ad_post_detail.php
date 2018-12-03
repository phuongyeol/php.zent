<!-- Khi click vào title/giao diện user hay detail trên giao diện admin thì đểu hiển thị content giao diện user -->
<?php 

    include('user_header.php'); // header của user
    include_once 'connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM news WHERE id = \"$id\"";

    $result = $conn->query($query);

    // Phân Trang: 
    $number_post_in_page = 5;
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    }else{
      $page = 1;
    }

    $start = ($page - 1)*$number_post_in_page;
    $query1 = "SELECT * FROM news LIMIT $start,$number_post_in_page;";
    $result1= $conn->query($query1);
    
    // Xác định tổng số bản ghi: 
    $sql = "SELECT count(*) AS SUM_ROWS from news";
    $result2 = $conn->query($sql)->fetch_assoc();
    $sum_rows = $result2['SUM_ROWS'];
    $sum_pages = ceil($sum_rows/$number_post_in_page);

?>


    <!-- Page Header -->
        <header class="masthead" style="background-image: url('<?php while ($row = $result->fetch_assoc()) {echo $row['image']; }?>')">

            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                      <h1 class="post-title">
                        <?php echo $row['title'] ?>
                      </h1>
                      <?php while ($row = $result->fetch_assoc()) { ?>
                      <span class="meta">Posted by
                        <a href="#"><?php echo $row['author']; ?></a>
                       </span>
                      <?php } ?>
                    </div>
                  </div>
                </div>
            </div>
        </header>

        <!-- Post Content -->
        <article>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <?php while ($row = $result->fetch_assoc()) { ?>
                <p><?php echo $row['content']; ?></p>
                <?php } ?>
              </div>

            </div>
          </div>
        </article>
    <hr>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <!-- Hiển thị thanh điều trang theo số trang đã biết: -->
        <?php for($i=1; $i<=$sum_pages;$i++){ ?>
          <li class="page-item"><a class="page-link" href="user_index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php } ?>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

<?php include_once('user_footer.php') ?>
    