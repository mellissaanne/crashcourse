		
		<div id = "main">

			<?php foreach($post as $post): ?>
				<h1> <?php echo $post['title']; ?></h1>
				<label>Description:</label> 
				<p> <?php echo $post['content']; ?></p>
				<label>Professor:</label> 
				<p> <?php echo $post['Prof']; ?></p>

				<h3>Average Rating:</h3> 

<div id="rating">

			<?php echo form_open("blog/comment/".$post['id']); ?>
				<label>Difficulty</label>
				<input type="radio" name="rateone" value="1">1
				<input type="radio" name="rateone" value="2">2
				<input type="radio" name="rateone" value="3">3
				<input type="radio" name="rateone" value="4">4
				<input type="radio" name="rateone" value="5">5
<<<<<<< HEAD
				<br>

				<?php
				$total_rate_one = 0;
				$post_count = 0;
					foreach($comments as $c) {
						$post_count += 1;
						$total_rate_one += $c['rateone'];
					}
				echo "Average rating: " . round($total_rate_one / $post_count, 1);
				
				?>

				<br>
=======
				<br><br>
>>>>>>> FETCH_HEAD
				<label>Usefulness</label>
				<input type="radio" name="ratetwo" value="1">1
				<input type="radio" name="ratetwo" value="2">2
				<input type="radio" name="ratetwo" value="3">3
				<input type="radio" name="ratetwo" value="4">4
				<input type="radio" name="ratetwo" value="5">5
<<<<<<< HEAD
				<br>

				<?php
				$total_rate_two = 0;
				$post_count = 0;
					foreach($comments as $c) {
						$post_count += 1;
						$total_rate_two += $c['ratetwo'];
					}
				echo "Average rating: " . round($total_rate_two / $post_count, 1);
				
				?>

				<br>
=======
				<br><br>
>>>>>>> FETCH_HEAD
				<label>Enjoyment</label>
				<input type="radio" name="ratethree" value="1">1
				<input type="radio" name="ratethree" value="2">2
				<input type="radio" name="ratethree" value="3">3
				<input type="radio" name="ratethree" value="4">4
				<input type="radio" name="ratethree" value="5">5
<<<<<<< HEAD
				<br>

				<?php
				$total_rate_three = 0;
				$post_count = 0;
					foreach($comments as $c) {
						$post_count += 1;
						$total_rate_three += $c['ratethree'];
					}
				echo "Average rating: " . round($total_rate_three / $post_count, 1);
				
				?>

				<br>
=======
				<Br><br>
>>>>>>> FETCH_HEAD
				<label>Workload</label>
				<input type="radio" name="ratefour" value="1">1
				<input type="radio" name="ratefour" value="2">2
				<input type="radio" name="ratefour" value="3">3
				<input type="radio" name="ratefour" value="4">4
				<input type="radio" name="ratefour" value="5">5

<<<<<<< HEAD
				<br>

				<?php
				$total_rate_four = 0;
				$post_count = 0;
					foreach($comments as $c) {
						$post_count += 1;
						$total_rate_four += $c['ratefour'];
					}
				echo "Average rating: " . round($total_rate_four / $post_count, 1);
				
				?>
=======

>>>>>>> FETCH_HEAD



</div>
				<label>Review</label>
				<textarea name="comment"></textarea>
				<br>
				<input type="submit" name="submit" value="Save">
				</form>
			<?php endforeach; ?>	
		</div>
<div id="comments">
			<ol>
				<?php foreach($comments as $c): ?>
					<li>
						<labeL>Difficulty</label> <?php echo $c['rateone']; ?> 
						<labeL>Usefulness</label> <?php echo $c['ratetwo']; ?> 
						<labeL>Enjoyment</label> <?php echo $c['ratethree']; ?> 
						<labeL>Workload</label> <?php echo $c['ratefour']; ?> 
							<br><?php echo $c['comment']; ?> </li>
							<br>

				<?php endforeach; ?>
			</ol>
		</div>	

