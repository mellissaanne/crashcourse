
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="/~ccit1561/crashcourse/assets/style.css">
	</head>
	
	<body>
<div id= "list">	
		<h1><?php echo $title; ?></h1>
		<h2>Search Results</h2>

	<div id = "result">
		<?php foreach($posts as $post): ?>
			<h3> <a href="/~ccit1561/crashcourse/index.php/blog/post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>

				<label>Description</label> 
				<p> <?php echo $post['content']; ?></p>
				<label>Professor:</label> 
				<p> <?php echo $post['Prof']; ?></p>
		<?php endforeach; ?>	
</div>

	</div>	

