<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/art_style.css">
	<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
</head>
<body onload="currentNav()">

	<div class="container">
		<br>

		<div id="header">
			<h5 class="text-center" id="logo"><a href="#">hamari hindi</a></h5>
		</div>

		<?php include 'navbar.php';?>

		<div id="main">

			<div id="main_left"><p>Article</p>
				<div class="article">
				</div>
			</div>				

			<div id="main_right">Sidebar
			<p>Hello</p>
			</div>

		</div>

		<div id="footer">4 Footer</div>

	</div>

	<script src="script/nav_script.js"></script>
	<script src="script/file_load.js"></script>
</body>
</html>