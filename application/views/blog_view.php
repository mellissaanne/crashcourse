
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="/~ccit1561/crashcourse/assets/style2.css">
	</head>
	
	<body>	
		<h1><?php echo $title; ?></h1>

	<div id = "main">
	<?php echo form_open("blog/search"); ?>
  			<label>Search by course code or professor:</label>
  			<input type="text" name="searchquery" />
  			<input type="submit" name="submit" value="Go">
		</form>
		<h5><a href="http://phoenix.sheridanc.on.ca/~ccit1561/crashcourse/index.php/Admin" title="Write">Write a Review Here</a></h5>
	


		<h2> Most recent posts<h2>
		<?php foreach($posts as $post): ?>
			<h3> <a href="/~ccit1561/crashcourse/index.php/blog/post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
			<p> <?php echo $post['content']; ?></p>
			<h3> <?php echo $post['tags']; ?></h3>
		<?php endforeach; ?>	

	</div>	

