<?php 
	include_once('views/layout/header.php');
?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Sửa bài viết</li>
     </ol>
	<form action="?mod=post&act=update&id=<?php echo $post['id']?>" method="POST">
		<div class="container">
			<center><h2>Edit</h2></center>
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" value="<?php echo $post['title']?>" class="form-control">
				<label>Short_content</label>
				<textarea name="short_content"  class="form-control" rows="4"><?php echo $post['short_content']?></textarea>
				<label>Contents</label>
				<textarea name="contents" class="form-control" rows="4"><?php echo $post['content']?></textarea>
				<label>Author</label>
				<input type="text" name="auth" value="<?php echo $post['auth']?>" class="form-control">
				<label>Catgory</label>
				<select name="category_id" class="form-control">
					<?php foreach ($categories as $cat) { ?>
						<option value="<?php echo $cat['id']; ?>"<?php if ($cat['id']==$post['category_id']) echo "selected"; ?>><?php echo $cat['name']; ?></option>
					<?php } ?>
				</select>
				<label>Images Link</label>
				<input type="text" name="image" class="form-control">
			</div>
			<input type="submit" name="submit" class="btn btn-success" value="Edit">
		</div>
	</form>
	<script>
	    CKEDITOR.replace( 'contents' );
	</script>
<?php 
	include_once('views/layout/footer.php');
?>