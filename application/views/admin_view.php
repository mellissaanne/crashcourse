
		<h1><?php echo $title; ?></h1>	

<div id = "main">		
		<?php echo form_open('Admin/create') ?>
		
		<h2>Write a Review</h2>
			<label>Course Code</label>
			<textarea type="text" name="title"></textarea>
			<br>
			<label>Professor</label>
			<textarea name="Prof"></textarea>
			<br>
			<label>Review</label>	
			<textarea name="content"></textarea>
			<br>
			<label>Tags (separate with commas)</label>	
			<textarea name="tags"></textarea>
			<br>
			<h2>Rate on a scale of 1 to 5.<h2>
			<h3>5 = very, 1 = not at all<h3>
			<label>Difficulty</label>
			<textarea name="Rateone"></textarea><br>
			<label>Usefulness</label>
			<textarea name="Ratetwo"></textarea><br>
			<label>Workload</label>
			<textarea name="Ratethree"></textarea><br>
			<label>Enjoyment</label>
			<textarea name="Ratefour"></textarea>
			<input type="submit" name="submit" value="create">
		</form>
			</ul>
		</div>
</div>
