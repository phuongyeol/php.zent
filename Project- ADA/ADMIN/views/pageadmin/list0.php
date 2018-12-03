<?php 
	include_once('views/layout/PageAdmin/header.php');
?>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <a href="" class="btn btn-success">Quốc Tế</a>
          <a href="" class="btn btn-primary">Thể Thao</a>
          <a href="" class="btn btn-info">Công Nghệ</a>
          <a href="" class="btn btn-warning">Trong Nước</a>
          <a href="" class="btn btn-danger">Thời Tiết</a>
        </div>
      </div>
  </div>
	<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
          <?php 
          	foreach ($blogs as $blog){ 
          ?>
            <a href="?mod=blog&act=detail&id=<?php echo $blog['id']?>">
              <h2 class="post-title">
                <?php echo $blog['title']  ?>
              </h2></a>
              <h4 class="post-subtitle">
                <?php echo $blog['short_content']  ?>
              </h4>
            
            <p class="post-meta">Posted by
              <a href="#"><?php echo $blog['author']  ?></a>
              on <?php echo $blog['date_public']  ?></p>
             <?php 
          		} 
          	?>
          </div>
          <hr>

          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>
<?php 
	include_once('views/layout/footer.php');
?>