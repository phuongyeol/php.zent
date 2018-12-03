<?php 
	include_once('views/layout/header.php');
?>
  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php foreach ($cates as $cat){ ?>
            <a href="?mod=blog&act=list1&cat=<?php echo $cat['id']?>" class="btn btn-danger"><?php echo $cat['name']?></a>
          <?php  }?>
          <!-- <a href="?mod=blog&act=list1&cat=2" class="btn btn-primary">Thể Thao</a>
          <a href="?mod=blog&act=list1&cat=3" class="btn btn-info">Công Nghệ</a>
          <a href="?mod=blog&act=list1&cat=4" class="btn btn-warning">Trong Nước</a>
          <a href="?mod=blog&act=list1&cat=5" class="btn btn-danger">Thời Tiết</a> -->
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