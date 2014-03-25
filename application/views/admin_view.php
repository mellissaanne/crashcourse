
		<h1><?php echo $title; ?></h1>	

<div id = "main">		
		<?php echo form_open('Admin/create') ?>
		
<<<<<<< HEAD
		<h2>Write a Review</h2>
			<label>Course Code</label>
			<textarea type="text" name="title"></textarea>
			<br>
			<label>Professor</label>
			<textarea name="Prof"></textarea>
			<br>
=======
		<h2> Create New Post</h2>
			<label>Course Code</label>
			<textarea type="text" name="title"></textarea>
			<br>
>>>>>>> FETCH_HEAD
			<label>Review</label>	
			<textarea name="content"></textarea>
			<br>
			<label>Tags (separate with commas)</label>	
			<textarea name="tags"></textarea>
			<br>
<<<<<<< HEAD
			<h2>Rate on a scale of 1 to 5.<h2>
			<h3>5 = very, 1 = not at all<h3>
			<label>Difficulty</label>
			<textarea name="Rateone"></textarea><br>
			<label>Usefulness</label>
			<textarea name="Ratetwo"></textarea><br>
			<label>Workload</label>
			<textarea name="Ratethree"></textarea><br>
			<label>Enjoyment</label>
=======
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
>>>>>>> FETCH_HEAD
			<textarea name="Ratefour"></textarea>
			<input type="submit" name="submit" value="create">
		</form>
			</ul>
		</div>
</div>
