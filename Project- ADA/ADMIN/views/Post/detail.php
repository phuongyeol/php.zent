<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Thông tin chi tiết bài viết</li>
     </ol>
	<div class="container">  

          <div  class="form-group" style="text-align: center;">
            <h2><?php echo $post['title']; ?></h2>
            <h3><?php echo $post['short_content']; ?></h3>
            <img width="500" height="500" src="<?php echo $post['images']; ?>">
            <h4><?php echo $post['content']; ?></h4>
            <p>Author: <?php echo $post['auth']; ?> --- Date: <?php echo $post['date_public']; ?></p>      
          </div>
    </div>
<style type="text/css">
	img{
		padding-bottom: 20px;
	}
</style>
<?php 
	include_once('views/layout/footer.php');
?>