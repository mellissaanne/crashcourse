
		<h1><?php echo $title; ?> | Admin</h1>	
<div id = "main">	
	<?php foreach($post as $p): ?>
		<?php echo form_open('Admin/update_post/' . $p['id']) ?>
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $p['title']; ?>">
			<label>Content</label>	
			<textarea name="content"><?php echo $p['content']; ?></textarea>
			<label>Tags</label>	
			<textarea name="tags"><?php echo $p['tags']; ?></textarea>
			<input type="submit" name="submit" value="Save">
		</form>
	<?php endforeach; ?>
</div>