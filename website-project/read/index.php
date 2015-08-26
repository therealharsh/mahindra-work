<!-- author Harsh Keswani therealharsh -->
<!-- MAHINDRA RISE PROJECT READ PAGE -->
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
// check for user cookie
if(!isset($_COOKIE['mahindra'])){
header("Location: ../");
}
//get user's first name
$user = $_COOKIE['mahindra'];
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

	<!-- PHP for TRENDING -->
	<?php
		//geting the top 5 trending users based on profile hits
		$con=mysql_connect("localhost","root") or die(mysql_error());
		mysql_select_db("Harsh");
		$sql1 = "select * from mahindrausers ORDER by views DESC LIMIT 0,5"; 
		$array = array();
		$eq1=mysql_query($sql1,$con);
		while($row = mysql_fetch_assoc($eq1)){
		  // add each row returned into an array
		  $array[] = $row;
		}
		
	?>



	<div id="container">
		<div class="news-ticker">
			<div class="container">
				<div class="row">
					<div id="yourpanel">
								<!-- BLOG NAV BAR -->
								<ul>
									<li><a class="active" href="index.php">Home</a></li>
									<li><a href="myprofile.php">My Profile</a></li>
									<li><a href="notifications.php">Notifications</a></li>
									<li><a href="followers.php">Followers</a></li>
									<li><a href="settings.php">Settings</a></li>
								</ul>
								<!-- END NAV BAR -->
							</div>	
					<div class="col-sm-7">
						

					<font style="color: white; font-size:24px;"><h><center>TOP TRENDING</center></h></font>
						<div id="panel">
						    <div id="first">
						    	<div id="image">
						    		<img src="<?php echo $array[0]['picture'] ?>" width="100%" height="100%" alt="test">
						    	</div>

						    	<div id="text">
						    		<center><font color="white"><b><a href="<?php echo $array[0]['url'] ?>"><?php echo $array[0]['fullname'] ?></b></a></font></center>
						    		<font style="color:white;"><p><center>
						    			Hits: <?php echo $array[0]['views'] ?>
						    		</center>	
						    		</p>
						    	</div>
						    </div>

						    <div id="second">
						    	 	<div id="image">
						    		<img src="<?php echo $array[1]['picture'] ?>" width="100%" height="100%" alt="test">
						    	</div>
						    	
						    	<div id="text">
						    		<center><a><font color="white"><b><a href="<?php echo $array[1]['url'] ?>"><?php echo $array[1]['fullname'] ?></b></a></font></a></center>
						    		<p><center>
						    			Hits: <?php echo $array[1]['views'] ?>
						    		</center>	
						    		</p>
						    		
						    	</div>
						    </div>

						    <div id="third">
						    	<div id="image">
						    		<img src="<?php echo $array[2]['picture'] ?>" width="100%" height="100%" alt="test">
						    	</div>
						    	
						    	<div id="text">
						    		<center><a><font color="white"><b><a href="<?php echo $array[2]['url'] ?>"><?php echo $array[2]['fullname'] ?></b></a></font></a></center>
						    		<p><center>
						    			Hits: <?php echo $array[2]['views'] ?>
						    		</center>	
						    		</p>
						    		
						    	</div>
						    </div>

						    <div id="fourth">
						    	<div id="image">
						    		<img src="<?php echo $array[3]['picture'] ?>" width="100%" height="100%" alt="test">
						    	</div>
						    	
						    	<div id="text">
						    		<center><a><font color="white"><b><a href="<?php echo $array[3]['url'] ?>"><?php echo $array[3]['fullname'] ?></b></a></font></a></center>
						    		<p><center>
						    			Hits: <?php echo $array[3]['views'] ?>
						    		</center>	
						    		</p>
						    		
						    	</div>
						    </div>

						    <div id="fifth">
						    	<div id="image">
						    		<img src="<?php echo $array[4]['picture'] ?>" width="100%" height="100%" alt="test">
						    	</div>
						    	
						    	<div id="text">
						    		<center><a><font color="white"><b><a href="<?php echo $array[4]['url'] ?>"><?php echo $array[4]['fullname'] ?></b></a></font></a></center>
						    		<p><center>
						    			Hits: <?php echo $array[4]['views'] ?>
						    		</center></p></font>
						    		
						    	</div>
						    </div><!-- END TOP TRENDING -->

						</div>
						

					</div>	

				</div>
			</div>
		</div>
	</div>
	

	
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

<!-- THE END -->
<!-- author: Harsh Keswani, @therealharsh -->