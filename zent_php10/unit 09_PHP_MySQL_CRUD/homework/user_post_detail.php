<!-- Khi click vào title/giao diện user hay detail trên giao diện admin thì đểu hiển thị content giao diện user -->
<?php 

    include_once('user_header.php'); // header của user
    include_once 'connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM news WHERE id = \"$id\"";

    $result = $conn->query($query);

?>


    <!-- Page Header -->
    <?php while ($row = $result->fetch_assoc()) { ?>
        <header class="masthead" style="background-image: url('<?php echo $row['image'] ?>')">

            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                      <h1 class="post-title">
                        <?php echo $row['title'] ?>
                      </h1>
                      
                      <span class="meta">Posted by
                        <a href="#"><?php echo $row['author']; ?></a>
                       </span>
                      
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
                <p><?php echo $row['content']; ?></p>
              </div>

            </div>
          </div>
        </article>
    <?php } ?>
    <hr>
<?php include_once('user_footer.php') ?>
    