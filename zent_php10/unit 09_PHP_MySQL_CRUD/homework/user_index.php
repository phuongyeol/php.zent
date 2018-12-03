<?php 
  include_once('user_header.php');
  include_once('connection.php');

  // Phân Trang: 
  $number_post_in_page = 5;
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }else{
    $page = 1;
  }

  $start = ($page - 1)*$number_post_in_page;
  $query = "SELECT * FROM news LIMIT $start,$number_post_in_page;";
  $result= $conn->query($query);
  
  // Xác định tổng số bản ghi: 
  $sql = "SELECT count(*) AS SUM_ROWS from news";
  $result1 = $conn->query($sql)->fetch_assoc();
  $sum_rows = $result1['SUM_ROWS'];
  $sum_pages = ceil($sum_rows/$number_post_in_page);
?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Toidicodedao</h1>
              <span class="subheading">HÀNH TRÌNH TỪ CODER ĐẾN DEVELOPER</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         <!-- Danh sách bài post -->
          <?php while ($row = $result->fetch_assoc()) { ?>
          <div class="post-preview">
            <a href="user_post_detail.php?id=<?php echo $row['id'] ?>">
              <h2 class="post-title">
                <?php echo $row['title'] ?>
              </h2>
              <h4 class="post-subtitle">
                <?php echo ($row['short_content']) ?>
              </h4>
            </a>
            <p class="post-meta">Posted by
              <a href="#"><?php echo ($row['author']) ?></a>
              on <?php echo "date_public" ; ?></p>
          </div>
          <?php } ?>
          
          <!-- <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div> -->
        </div> 
      </div>
    </div>

    <hr>
    <!-- Pagination -->
    
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
    
    <!-- Footer -->
  <?php include_once('user_footer.php') ?>
