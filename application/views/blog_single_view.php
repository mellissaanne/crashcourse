		<h1><?php echo $title; ?></h1>
		<div id = "main">

			<?php foreach($post as $post): ?>
				<h3> <?php echo $post['title']; ?></h3>
				<label>Description:</label> 
				<p> <?php echo $post['content']; ?></p>
				<label>Professor:</label> 
				<p> <?php echo $post['Prof']; ?></p>

				<h3>Average Rating:</h3>



			<?php echo form_open("blog/comment/".$post['id']); ?>
				<label>Rate 1-5:</label>
				<textarea name="rateone"></textarea>
				<br>
				<label>Review</label>
				<textarea name="comment"></textarea>
				<br>
				<input type="submit" name="submit" value="Save">
				</form>
			<?php endforeach; ?>	

			<ol>
				<?php foreach($comments as $c): ?>
					<li>
						<labeL>Rating: </label> <?php echo $c['rateone']; ?> 
							<br><?php echo $c['comment']; ?> </li>
							<br>

				<?php endforeach; ?>
			</ol>
		</div>	
