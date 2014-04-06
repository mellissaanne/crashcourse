
		<h1><?php echo $title; ?> Admin</h1>	

<div id = "main">		
		<?php echo form_open('Admin/create') ?>
		
		<h2>Enter new course:</h2>
			<label>Course Code</label>
			<textarea type="text" name="title"></textarea>
			<br>
			<label>Professor</label>
			<textarea name="Prof"></textarea>
			<br>
			<label>Course Description</label>
			<textarea name="content"></textarea>
			<br>
			<input type="submit" name="submit" value="create">
		</form>
		<br>
		


		<div id = "postlist">
			<h3><a href="http://phoenix.sheridanc.on.ca/~ccit1561/crashcourse/index.php/blog" title="Blog">View Crashcourse Site</a></h3>
			<h2>Edit Posts</h2> 
			<ul> 
	  			<?php foreach($posts as $post): ?> 
	    		<li><a href="/~ccit1561/crashcourse/index.php/Admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1561/crashcourse/index.php/Admin/delete/<?php echo $post['id']; ?>">delete post</a></li>
	  			<?php endforeach; ?> 

		</div>
</div>
