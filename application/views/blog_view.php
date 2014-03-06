
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="/~ccit1561/cct460/assets/style2.css">
	</head>
	
	<body>	
		<h1><?php echo $title; ?></h1>
	<div id = "main">
		<?php foreach($posts as $post): ?>
			<h2> <?php echo $post['title']; ?></h2>
			<p> <?php echo $post['content']; ?></p>
			<h3> <?php echo $post['tags']; ?></h3>
		<?php endforeach; ?>	
	</div>	
