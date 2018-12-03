<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Thêm bài viết</li>
     </ol>
	<form action="?mod=post&&act=store" method="POST" enctype="multipart/form-data">
		<div class="container">
			<center><h2>Thêm bài viết</h2></center>
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
				<label>Short-content</label>
				<textarea name="short_content" class="form-control" rows="4"></textarea>
				<label>Contents</label>
				<textarea name="contents" class="form-control" rows="4"></textarea>
				<label>Author</label>
				<input type="text" name="auth" class="form-control">
				<label>Category</label>
				<select name="category_id" class="form-control">
					<?php foreach ($categories as $cat) { ?>
						<option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
					<?php } ?>
				</select>
				<label>Images Link</label>
				<input type="text" name="image" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-success" value="Thêm">


		</div>
	</form>
	<script>
	    CKEDITOR.replace( 'contents' );
	</script>
<?php 
	include_once('views/layout/footer.php');
?>