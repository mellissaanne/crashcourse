
		<h1><?php echo $title; ?> | Admin</h1>	

<div id = "main">		
		<?php echo form_open('Admin/create') ?>
		
		<h2> Create New Post</h2>
			<label>Course Code</label>
			<textarea type="text" name="title"></textarea>
			<br>
			<label>Review</label>	
			<textarea name="content"></textarea>
			<br>
			<label>Tags (separate with commas)</label>	
			<textarea name="tags"></textarea>
			<br>
			<label>Professor</label>
			<textarea name="Prof"></textarea>
			<br>
			<label>Easiness</label>
			<textarea name="Rateone"></textarea><br>
			<label>Usefulness</label>
			<textarea name="Ratetwo"></textarea><br>
			<label>awesomeness</label>
			<textarea name="Ratethree"></textarea><br>
			<label>good</label>
			<textarea name="Ratefour"></textarea>
			<input type="submit" name="submit" value="create">
		</form>
			</ul>
		</div>
</div>
