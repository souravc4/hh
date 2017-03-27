<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home_style.css">
	<link href="https://fonts.googleapis.com/css?family=Amiko" rel="stylesheet">
</head>
<body onload="currentNav()">

	<div class="navbar-wrapper">
		<div class="container">
			<h5 class="text-center" id="logo" onclick="header()"><a href="#">hamari hindi</a></h5>
			<?php include 'navbar.php';?>
		</div>
	</div>

	<div class="container" id="carnav">
		<div id="shows" class="carousel slide" data-ride="carousel" data-interval="5000">
			<ol class="carousel-indicators">
				<li data-target="#shows" data-slide-to="0" class="active"></li>
				<li data-target="#shows" data-slide-to="1"></li>
				<li data-target="#shows" data-slide-to="2"></li>
				<li data-target="#shows" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active text-center">
					<br><br><br><br><br><br><br>
					<p class="text-left">&nbsp "किसी की क्या मज़ाल थी की जो हमको खरीद सके,</p>
					<p class="text-right">हम तो खुद बिक गए खरीददार देख कर" - अहमद फ़राज़ &nbsp</p>
				</div>
				<div class="item text-center">
					<br><br><br><br><br><br><br>
					<p class="text-left">&nbsp &nbsp "इश्क़ ने 'ग़ालिब' निकम्मा कर दिया,</p>
					<p class="text-right">वरना हम भी आदमी थे काम के" - ग़ालिब &nbsp</p>
				</div>
				<div class="item text-center">
					<br><br><br><br><br><br><br>
					<p class="text-left">&nbsp "कौन देता है उम्र भर का सहारा ऐ-फ़राज़,</p>
					<p class="text-right">लोग तो जनाजे में भी कंधे बदल लेते है" - अहमद फ़राज़&nbsp</p>
				</div>
				<div class="item text-center">
					<br><br><br><br><br><br><br>
					<p class="text-left">&nbsp "और भी दुःख है ज़माने में मोहब्बत के सिवा,</p>
					<p class="text-right">राहते और भी है वस्ल की राहत के सिवा" - फैज़ अहमद फैज़ &nbsp</p>
				</div>
			</div>
			<!--<a class="left carousel-control" href="#shows" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#shows" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a> -->
		</div>	
	</div>

	<div class="container part">
		<div class="jumbotron main">

			<div class="thumb">
				<p>Shayari</p>
			</div>

			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/a.png" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/b.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>
			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/c.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/d.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="container part">
		<div class="jumbotron main">
			
			<div class="thumb">
				<p>Original</p>
			</div>

			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/e.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/f.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>
			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/g.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/h.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>

		</div>
	</div>
			
	<div class="container part">
		<div class="jumbotron main">
			
			<div class="thumb">
				<p>Popular</p>
			</div>

			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/i.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/j.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>
			<div class="row mod">
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/k.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
				<div class="col-md-6">
					<div class="thumbnail">
						<img src="images/l.jpg" data-toggle="modal" data-target="#myModal" onclick="modalimg(this)">
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body" style="height: 550px">
					<img style="width: 100%;max-height: 100%" id="target" height="100%" width="100%">
				</div>
				<div class="modal-footer">
					<button id="btn1" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script src="script/modal_script.js"></script>
	<script src="script/nav_script.js"></script>
	<script src="script/scroll.js"></script>
</body>
</html>
