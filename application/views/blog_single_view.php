		<h1><?php echo $title; ?></h1>
		<div id = "main">

			<?php foreach($post as $post): ?>
				<h3> <?php echo $post['title']; ?></h3>
				<p> <?php echo $post['content']; ?></p>
				<h3> <?php echo $post['tags']; ?></h3>

			<?php echo form_open("blog/comment/".$post['id']); ?>
				<label>Comment</label>
				<textarea name="comment"></textarea>
				<input type="submit" name="submit" value="Save">
				</form>
			<?php endforeach; ?>	

			<ol>
				<?php foreach($comments as $c): ?>
					<li><?php echo $c['comment']; ?></li>
				<?php endforeach; ?>
			</ol>
		</div>	
