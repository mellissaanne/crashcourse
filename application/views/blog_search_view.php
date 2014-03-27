
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="/~ccit1561/crashcourse/assets/style2.css">
	</head>
	
	<body>	
		<h1><?php echo $title; ?></h1>
		<h2>Search Results</h2>

	<div id = "main">
		<?php foreach($posts as $post): ?>
			<h3> <a href="/~ccit1561/crashcourse/index.php/blog/post/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>

				<label>Description</label> 
				<p> <?php echo $post['content']; ?></p>
				<label>Professor:</label> 
				<p> <?php echo $post['Prof']; ?></p>
		<?php endforeach; ?>	

	</div>	

