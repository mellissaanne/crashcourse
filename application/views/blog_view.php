
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="/~ccit1561/crashcourse/assets/style2.css">
	</head>
	
	<body>	
		<h1><?php echo $title; ?></h1>
		<p>Description of crash course site</p>


	<div id = "main">
	<?php echo form_open("blog/search"); ?>
  			<label>Search by course code</label>
  			<input type="text" name="searchquery" />
  			<input type="submit" name="submit" value="Go">
		</form>
	
	<br>	

	</div>	

