
		<h1><?php echo $title; ?> | Admin</h1>	

<div id = "main">		
		<?php echo form_open('Admin/create') ?>
		
		<h2> Create New Post</h2>
			<label>Title</label>
			<textarea type="text" name="title"></textarea>
			<br>
			<label>Content</label>	
			<textarea name="content"></textarea>
			<br>
			<label>Tags (separate with commas)</label>	
			<textarea name="tags"></textarea>
			<input type="submit" name="submit" value="create">
		</form>

		<div id = "postlist">
			<h6><a href="http://phoenix.sheridanc.on.ca/~ccit1561/crashcourse/index.php/blog" title="Blog">View Blog</a></h6>
			<h2>Edit Posts</h2> 
			<ul> 
	  			<?php foreach($posts as $post): ?> 
	    		<li><a href="/~ccit1561/crashcourse/index.php/Admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1561/cct460/index.php/Admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
	  			<?php endforeach; ?> 
			</ul>
		</div>
</div>
