<?php 
	include_once('views/layout/header.php');
?>
	<div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">

             <div  class="form-group" style="text-align: center;">
              <h1><?php echo $blog['title']; ?></h1>
              <h4><?php echo $blog['short_content']; ?></h4>
              <img width="500" height="500" src="<?php echo $blog['images']; ?>">
              <p><?php echo $blog['content']; ?></p>
              <p>Author: <?php echo $blog['auth']; ?> --- Date: <?php echo $blog['date_public']; ?></p>      
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