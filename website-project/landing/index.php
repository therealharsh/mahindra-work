<!-- author Harsh Keswani therealharsh -->
<!-- MAHINDRA RISE PROJECT LANDING PAGE -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahindra Rise Landing Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
</head><!--/head-->

<!-- PHP -->
<?php
//check if user is logged in to allow access
if(!isset($_COOKIE['mahindra'])){
header("Location: ../");
}
$user = $_COOKIE['mahindra'];
//get user's first name to be displayed on header
$con=mysql_connect("localhost","root");
mysql_select_db("Harsh");
$sql="select first_name from loginpass where username = '$user'";
$eq=mysql_query($sql,$con);
while($row=mysql_fetch_array($eq)){
	$firstname = $row['first_name'];
}
?>

<!-- END PHP -->

<!-- HTML -->
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
							<div class="search_box pull-right">
								<input type="text" placeholder="Search"/>
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
						<ul><li>Hello, <?php echo"$firstname";?></li></ul>
							<a href="index.html"><img src="" alt="Mahindra Rise Logo" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="menunav pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="../read/index.php">Read</a></li>
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
		<div id="carousel-container">
			<div>
				<div>
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
						</ol>
						<!-- PHP for Carousel -->
						<!-- images -->
						<?php
							//get images based on ID
							$con=mysql_connect("localhost","root") or die(mysql_error());
							mysql_select_db("Harsh");
							$sql1 = "select url from images where id=1";
							$sql2 = "select url from images where id=2";
							$sql3 = "select url from images where id=3";
							$sql4 = "select url from images where id=4";
							$eq1=mysql_query($sql1,$con);
							$eq2=mysql_query($sql2,$con);
							$eq3=mysql_query($sql3,$con);
							$eq4=mysql_query($sql4,$con);
							$row1 = mysql_fetch_assoc($eq1);
							$row2 = mysql_fetch_assoc($eq2);
							$row3 = mysql_fetch_assoc($eq3);
							$row4 = mysql_fetch_assoc($eq4);
							$img1 = $row1['url'];
							$img2 = $row2['url'];
							$img3 = $row3['url'];
							$img4 = $row4['url'];
						?>
						<!-- text -->
						<?php
							//get text associate with image ID
							$con=mysql_connect("localhost","root") or die(mysql_error());
							mysql_select_db("Harsh");
							$sql1 = "select header from carousel_text where id=0";
							$sql2 = "select para from carousel_text where id=0";
							$sql3 = "select text from carousel_text where id=0";
							$eq1=mysql_query($sql1,$con);
							$eq2=mysql_query($sql2,$con);
							$eq3=mysql_query($sql3,$con);
							$row1 = mysql_fetch_assoc($eq1);
							$row2 = mysql_fetch_assoc($eq2);
							$row3 = mysql_fetch_assoc($eq3);
							$headerText = $row1['header'];
							$paraText = $row2['para'];
							$carouselFoot = $row3['text'];
						?>
						<!-- END PHP -->
						
						<div class="carousel-inner">
							<div class="item active">
								<div id="carouselImage1">

    								<img src="<?php echo $img1 ?>" width="100%" height="100%" alt="test1">
    									<div id="carouselText">
    									<a> <!-- Header from DB --> <?php echo $headerText ?></a><br><br>
    										<p><!-- Text from DB --> <?php echo $paraText ?>
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
    								<img src="<?php echo $img2 ?>" width="100%" height="100%" alt="test">
    									<div id="carouselText">
    									<a> <!-- Header from DB --> <?php echo $headerText ?></a><br><br>
    										<p><!-- Text from DB --> <?php echo $paraText ?>
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
    								<img src="<?php echo $img3 ?>" width="100%" height="100%" alt="test">
    									<div id="carouselText">
    									<a><!-- Header from DB --> <?php echo $headerText ?></a><br><br>
    										<p><!-- Text from DB --> <?php echo $paraText ?>
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
									<img src="<?php echo $img4 ?>" width="100%" height="100%" alt="test">
    									<div id="carouselText">
    									<a><!-- Header from DB --> <?php echo $headerText ?></a><br><br>
    										<p><!-- Text from DB --> <?php echo $paraText ?>
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
			<!-- Text from DB --> <?php echo $carouselFoot ?>
		</center></p></div>
	</section><!--/CAROUSEL-->

	<section id="rise"><!-- RISE IN ACTION -->

		<!-- RISE -->
		<!-- text -->
		<?php
			$con=mysql_connect("localhost","root") or die(mysql_error());
			mysql_select_db("Harsh");
			$sql2 = "select header from carousel_text where id=0";
			$sql3 = "select para from carousel_text where id=0";
			$sql4 = "select para from carousel_text where id=0";
			$eq2=mysql_query($sql2,$con);
			$eq3=mysql_query($sql3,$con);
			$eq4=mysql_query($sql4,$con);
			$row2 = mysql_fetch_assoc($eq2);
			$row3 = mysql_fetch_assoc($eq3);
			$row4 = mysql_fetch_assoc($eq4);
			$boxHeader = $row2['header'];
			$boxParaText = $row3['para'];
			$leftRightPara = $row4['para'];
		?>

		<!-- images -->
		<?php
			$con=mysql_connect("localhost","root") or die(mysql_error());
			mysql_select_db("Harsh");
			$sql1 = "select url from images where id=6";
			$sql2 = "select url from images where id=7";
			$sql3 = "select url from images where id=7";
			$sql4 = "select url from images where id=5";
			$sql5 = "select url from images where id=6";
			$eq1=mysql_query($sql1,$con);
			$eq2=mysql_query($sql2,$con);
			$eq3=mysql_query($sql3,$con);
			$eq4=mysql_query($sql4,$con);
			$eq5=mysql_query($sql5,$con);
			$row1 = mysql_fetch_assoc($eq1);
			$row2 = mysql_fetch_assoc($eq2);
			$row3 = mysql_fetch_assoc($eq3);
			$row4 = mysql_fetch_assoc($eq4);
			$row5 = mysql_fetch_assoc($eq5);
			$riseImg1 = $row1['url'];
			$riseImg2 = $row2['url'];
			$riseImg3 = $row3['url'];
			$riseImgLeft = $row4['url'];
			$riseImgRight = $row5['url'];
		?>
		<!-- END PHP -->

		<div id = "riseContainer">
			<div id = "riseHeader">
				<center><h1><span>Lorem ipsum</span> dolor sit amet.</h1></center>
				<div id = "riseHeaderPara">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Duis ullamcorper, orci nec pulvinar mollis, diam neque maximus risus, a dictum felis turpis et nisl.
						Praesent neque mi, iaculis quis mi sed, porta bibendum magna.
					</p>
				</div>	
			</div>

			<div id = "riseContent">

			<div id="riseOne">
				<div id="riseContentOne"> <!-- ONE FLAT IMAGE WITH TEXT HANDLE -->

					<img src="<?php echo $riseImg1 ?>" width="100%" height="100%" alt="test">
    				<div id="riseText1"><a><!-- Text from DB --> <?php echo $boxHeader ?></a><br><br>
    					<p><!-- Text from DB --> <?php echo $boxParaText ?>
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    				</div>

				</div>
			</div>	

			<div id="riseTwo">
				<div id="riseContentTwo"> <!-- ONE TALL IMAGE WITH TEXT HANDLE -->
					
					<img src="<?php echo $riseImg2 ?>" width="100%" height="100%" alt="test">
    				<div id="riseText2"><a><!-- Text from DB --> <?php echo $boxHeader ?></a><br><br>
    					<p><!-- Text from DB --> <?php echo $boxParaText ?>
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    				</div>

				</div>
			</div>

			<div id="riseThree">
				<div id="riseContentThree"> <!-- TWO SMALLER IMAGES WITH TEXT HANDLE -->
					
					<div id="threeleft">
	    				<img id="riseImage3Left" src="<?php echo $riseImgLeft ?>" width="80%" height="90%" alt="test">

    					<div id="riseText3Left"><a><!-- Text from DB --> <?php echo $boxHeader ?></a><br><br>
    					<p><!-- Text from DB --> <?php echo $leftRightPara; ?>
    						<div class="btn-group">
								<button type="button" class="btn btn-default">
									Read More
								</button>
							</div>
    					</p>
    					</div>

	    			</div>

	    			<div id="threeright">
	    				<img id="riseImage3Right" src="<?php echo $riseImgRight ?>" width="80%" height="90%" alt="test">

    					<div id="riseText3Right"><a><!-- Text from DB --> <?php echo $boxHeader ?></a><br><br>
    					<p><!-- Text from DB --> <?php echo $leftRightPara; ?>
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

		</div>
	</div>
 	</section>


		<!-- NEWS -->
		<!-- NEWS TICKER PHP -->
		<?php
			$con=mysql_connect("localhost","root") or die(mysql_error());
			mysql_select_db("Harsh");
			$sql1 = "select news from mahindranews where date=CURDATE()"; //takes news from today
			$eq1=mysql_query($sql1,$con);
			$row1 = mysql_fetch_assoc($eq1);
			$newsTicker = $row1['news'];
		?>
		<!-- END PHP -->

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
								<marquee behavior="scroll" direction="left"><font color="white"><?php echo $newsTicker ?></font></marquee>
						</div>
					</div>
			</div>
		</div>
		</div>
		<div class="news-content">
			<p><center><b><h1><span>Lorem ipsum</span> dolor sit amet.</h1></b></center></p>
			<p><center>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br><br>
			</center></p>

		<!-- NEWS PANEL PHP -->

		<?php
			$con=mysql_connect("localhost","root") or die(mysql_error());
			mysql_select_db("Harsh");
			$sql1 = "select url from images where id=5"; 
			$sql2 = "select url from images where id=6"; 
			$sql3 = "select para from carousel_text where id=0";
			$eq1=mysql_query($sql1,$con);
			$eq2=mysql_query($sql2,$con);
			$eq3=mysql_query($sql3,$con);
			$row1 = mysql_fetch_assoc($eq1);
			$row2 = mysql_fetch_assoc($eq2);
			$row3 = mysql_fetch_assoc($eq3);
			$leftImage = $row1['url'];
			$rightImage = $row2['url'];
			$dummyText = $row3['para'];
		?>

		<!-- END PHP -->



		<div id="panel">
		    <div id="left">
		    	<div id="leftimage">
		    		<img src="<?php echo $leftImage ?>" width="100%" height="100%" alt="test">
		    	</div>

		    	<div id="lefttext">
		    		<a><font color="#E63018"><b>Lorem Ipsum</b></font></a>
		    		<p>
		    			<?php echo $dummyText ?>
		    		</p>
		    		<button type="button" class="btn btn-default">
						Read More
					</button>
		    	</div>
		    </div>

		    <div id="middle">
		    	<div id="middletext">
		    		<a><font color="#E63018"><b>Lorem Ipsum</b></font></a>
		    		<p>
		    			<?php echo $dummyText ?>
		    		</p>
		    		<button type="button" class="btn btn-default">
						Read More
					</button>
		    	</div>

		    	<div id="middlevideo">
		    		<video width="100%" height="100%" controls>
  						<source src="fun.mp4" type="video/mp4">
  						Your browser does not support HTML5 video.
					</video>
		    	</div>
		    </div>

		    <div id="right">
		    	<div id="rightimage">
		    		<img src="<?php echo $rightImage ?>" width="100%" height="100%" alt="test">
		    	</div>
		    	
		    	<div id="righttext">
		    		<a><font color="#E63018"><b>Lorem Ipsum</b></font></a>
		    		<p>
		    			<?php echo $dummyText ?>
		    		</p>
		    		<button type="button" class="btn btn-default">
						Read More
					</button>
		    	</div>
		    </div>
		</div>
	</div>
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

<!-- THE END OF LANDING PAGE -->
<!-- author: Harsh Keswani, @therealharsh -->