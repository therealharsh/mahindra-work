<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mahindra Rise Landing Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

<header id="header">

		<div class="first_header"><!--TOP HEADER-->
			<div class="container">
				<div class="row">
						<div class="col-sm-9">
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="#">About Rise</a></li>
									<li><a href="#">Brand Center</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Sites</a></li>
								</ul>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="search_box pull-right">
								<input type="text" placeholder="Search"/>
							</div
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--TOP HEADER-->
		
		<div class="second_header"><!--BOTTOM HEADER-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="" alt="Mahindra Rise Logo" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="menunav pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="#">Read</a></li>
									<li><a href="#">Watch</a></li>
									<li><a href="#">Express</a></li>
									<li><a href="#">Learn</a></li>
									<li><a href="#">Play</a></li>
									<li><a href="#">My Corner</a></li>
									<li><a href="#">How Can We Help?</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div><!--/BOTTOM HEADER-->

	</header>
	
	<section id="slider"><!--CAROUSEL-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div id="carouselImage1">

									<!-- OPEN PHP -->
									<?php

	  									$id = $_GET['id'];
	  									$link = mysql_connect("localhost", "root");
	  									mysql_select_db("Harsh");
	  									$sql = "SELECT url FROM images WHERE id=$id";
	  									$result = mysql_query("$sql");
	  									$row = mysql_fetch_assoc($result);
	  									mysql_close($link);

	  									header("Content-type: image/jpeg");
	  									echo $row['url'];
									?> 
									<!-- CLOSE PHP -->

    								<img src="getImage.php?id=1" width="980" height="700" alt="test">
    									<div id="carouselText"><a>Lorem Ipsum</a><br><br>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    											<div class="btn-group">
													<button type="button" class="btn btn-default">
													Read More
													</button>
												</div>
    										</p>
    									</div>
								</div>
							</div>
							<div class="item ">
								<div id="carouselImage2">

									<!-- OPEN PHP -->
									<?php

	  									$id = $_GET['id'];
	  									$link = mysql_connect("localhost", "root");
	  									mysql_select_db("Harsh");
	  									$sql = "SELECT url FROM images WHERE id=$id";
	  									$result = mysql_query("$sql");
	  									$row = mysql_fetch_assoc($result);
	  									mysql_close($link);

	  									header("Content-type: image/jpeg");
	  									echo $row['url'];
									?> 
									<!-- CLOSE PHP -->


    								<img src="getImage.php?id=2" width="980" height="700" alt="test">
    									<div id="carouselText"><a>Lorem Ipsum</a><br><br>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    											<div class="btn-group">
													<button type="button" class="btn btn-default">
														Read More
													</button>
												</div>
    										</p>
    									</div>
								</div>
							</div>
							
							<div class="item ">
								<div id="carouselImage3">

										<!-- OPEN PHP -->
										<?php

		  									$id = $_GET['id'];
		  									$link = mysql_connect("localhost", "root");
		  									mysql_select_db("Harsh");
		  									$sql = "SELECT url FROM images WHERE id=$id";
		  									$result = mysql_query("$sql");
		  									$row = mysql_fetch_assoc($result);
		  									mysql_close($link);

		  									header("Content-type: image/jpeg");
		  									echo $row['url'];
										?> 
										<!-- CLOSE PHP -->


    								<img src="getImage.php?id=3" width="980" height="700" alt="test">
    									<div id="carouselText"><a>Lorem Ipsum</a><br><br>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    											<div class="btn-group">
													<button type="button" class="btn btn-default">
														Read More
													</button>
												</div>
    										</p>
    									</div>
								</div>
							</div>

							<div class="item ">
								<div id="carouselImage4">
										
									<!-- OPEN PHP -->
									<?php

  									$id = $_GET['id'];
  									$link = mysql_connect("localhost", "root");
  									mysql_select_db("Harsh");
  									$sql = "SELECT url FROM images WHERE id=$id";
  									$result = mysql_query("$sql");
  									$row = mysql_fetch_assoc($result);
  									mysql_close($link);

  									header("Content-type: image/jpeg");
  									echo $row['url'];
									?> 
									<!-- CLOSE PHP -->


									<img src="getImage.php?id=4" width="980" height="700" alt="test">
    									<div id="carouselText"><a>Lorem Ipsum</a><br><br>
    										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    											<div class="btn-group">
													<button type="button" class="btn btn-default">
														Read More
													</button>
												</div>
    										</p>
    									</div>
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="carousel-foot"> <center><h1><span>Lorem ipsum</span> dolor sit amet.</h1></center>
		<p><center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna. Phasellus mauris nulla, posuere eget arcu sed, iaculis vulputate massa. Vestibulum blandit laoreet neque, eu congue dolor lobortis ac. Nullam a tortor risus. Nullam luctus lacus bibendum, lacinia metus non, rutrum urna. Aliquam gravida auctor ullamcorper. Aenean vitae dolor id risus dapibus faucibus. Suspendisse lacinia pellentesque leo, nec vestibulum enim posuere tincidunt. Quisque blandit feugiat erat id lacinia. Proin semper et magna ac luctus.<br><br>

			Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Vivamus condimentum, neque ac auctor consectetur, sapien nunc euismod arcu, rutrum volutpat nibh erat porttitor enim. Duis lobortis quis magna quis sagittis. Nulla quis nisi rutrum, fermentum nulla in, fringilla purus. Etiam id rhoncus metus. Nullam id tellus in diam efficitur luctus. Mauris fermentum tempus placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
		</center></p></div>
	</section><!--/CAROUSEL-->

	<section id="rise"><!-- RISE IN ACTION -->
	<div class="rise">
		<p><center><b><i><h1><span>Lorem ipsum</span> dolor sit amet.</h1></i></b></center></p>
			<div class="riseInAction">
				<p><center>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.
				Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
				</center></p>
				<div id="riseImage1">

    				<img src="images/home/landscape.jpg" width="1030" height="500" alt="test">
    				<div id="riseText1"><a>RISE IN BUSINESS</a><br><br>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br><br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    				</div>
				</div>

				<div id="riseImage2">

    				<img src="images/home/teamwork.jpg" width="600" height="440" alt="test">
    				<div id="riseText2"><a>RISE IN BUSINESS</a><br><br>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br><br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    				</div>
				</div>

				<div id="riseImage3">

    				<img src="images/home/office.jpg" width="780" height="400" alt="test">
    				<div id="riseText3"><a>RISE IN BUSINESS</a><br><br>
    					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna.<br><br>Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    				</div>
				</div>

			</div>	
	</div>

 	</section>

	<section id="news"><!-- NEWS -->
		<div class="news-ticker">
			<div class="container">
			<div class="row">
				<div class="col-sm-4">
						<div class="logo pull-left">
							<font color="#E63018">NEWS</font>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="menunav">
								<marquee behavior="scroll" direction="left"><font color="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper, orci nec pulvinar mollis, diam neque maximus risus, a dictum felis turpis et nisl. Praesent neque mi, iaculis quis mi sed, porta bibendum magna</font></marquee>
						</div>
					</div>
			</div>
		</div>
		</div>
		<div class="news-content">
		<p><center><b><i><font size="14" color="#929292">Lorem ipsum dolor sit amet.</font></i></b></center></p>
		<p><center>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lorem ipsum, pharetra eu aliquet ac, volutpat sollicitudin magna. Phasellus mauris nulla, posuere eget arcu sed, iaculis vulputate massa. Vestibulum blandit laoreet neque, eu congue dolor lobortis ac. Nullam a tortor risus. Nullam luctus lacus bibendum, lacinia metus non, rutrum urna. Aliquam gravida auctor ullamcorper. Aenean vitae dolor id risus dapibus faucibus. Suspendisse lacinia pellentesque leo, nec vestibulum enim posuere tincidunt. Quisque blandit feugiat erat id lacinia. Proin semper et magna ac luctus.<br><br>

			Aenean cursus tellus non ligula euismod, ac accumsan nisi bibendum. Nam fermentum ipsum ut massa blandit faucibus a sit amet arcu. Praesent nec nunc elementum, tincidunt libero id, rutrum neque. Vivamus condimentum, neque ac auctor consectetur, sapien nunc euismod arcu, rutrum volutpat nibh erat porttitor enim. Duis lobortis quis magna quis sagittis. Nulla quis nisi rutrum, fermentum nulla in, fringilla purus. Etiam id rhoncus metus. Nullam id tellus in diam efficitur luctus. Mauris fermentum tempus placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc consequat luctus libero, non tincidunt enim viverra vitae. Mauris rutrum dignissim dolor, in mattis augue blandit at.
		</center></p></div>
	</section><!-- /NEWS -->
	
	<section><!-- SITE COMMENTS -->
		<div class="site-comments">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<font color="#f6045a">SITE COMMENTS</font>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /SITE COMMENTS -->
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>READ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>WATCH</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>EXPRESS</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>LEARN</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>PLAY</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>MY CORNER</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>ABOUT RISE</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>NEWS</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SITES</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>HOW CAN WE HELP</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">My Corner</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Mahindra & Mahindra Ltd. All rights reserved.</p>
					<p class="pull-right">Designed by <a target="_blank" href="http://harshkeswani.com">therealharsh</a></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>