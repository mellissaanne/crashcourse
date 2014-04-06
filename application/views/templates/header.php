<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="/~ccit1561/crashcourse/assets/style.css">
<html>
<head>
	<title><?php echo $title; ?></title>
	<div id ="header"><a href="http://phoenix.sheridanc.on.ca/~ccit1561/crashcourse/index.php/blog"><img src="http://i59.tinypic.com/23r4h1x.png" border="0" alt="Image and video hosting by TinyPic"></a>
	</div>
</head>

<body>

	<div id = "nav">

Nav BAR
			<?php echo form_open("blog/search"); ?>
		  			<label>Course Code</label>
		  			<input type="text" name="searchquery" />
		  			<input type="submit" name="submit" value="Go">
				</form>
				<br>	

			</div>	