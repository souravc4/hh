<?php
echo '<nav class="navbar navbar-default">     
				<div class="container"> 
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="mainNavbar">
						<ul class="nav navbar-nav">
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="index.php"><p>Home</p></a></li>
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="#"><p>Shayari</p></a></li>
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="#"><p>Original</p></a></li>
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="#"><p>Popular</p></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-center">
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="articles.php"><p>Articles</p></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="#"><p>Visitor Section</p></a></li>
							<li onmouseover="mOver(this)" onmouseout="mOut(this)"><a class="headmenu" href="#"><p>Add your post</p></a></li>
						</ul>
					</div>  
				</div>
			</nav>';

?>