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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>

<script type="text/javascript" src="js/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
</head><!--/head-->

<!-- ADDED STYLES -->
<style> 
#panel, #flip {
    text-align: center;
}

#flip {
	background-color: transparent;
}
#panel2 {
    display: none;
}
#name{
  line-height:100%;
  width:100%;
  font-size: 100%;
}
#OlderPosts{
	background-color: white;
}

#post{
	padding-right: 2%;
	padding-left: 2%;
	padding-bottom: 2%;
	background-color: rgba(255,255,255);
}
</style>

		<!-- PHP TO CHANGE TIME DISPLAY FORMAT -->
		<?php
		//converts mysql DATETIME to seconds, minutes, hours, days, months, years, decades
		function nicetime($date)
		{
		    if(empty($date)) {
		        return "No date provided";
		    }
		    
		    $periods         = array("s", "m", "h", "d", "w", "mo", "y", "dec");
		    $lengths         = array("60","60","24","7","4.35","12","10");
		    
		    $now             = time()-(60*60*7); //messed up time thingy
		    $unix_date         = strtotime($date);
		    
		       // check validity of date
		    if(empty($unix_date)) {    
		        return "Bad date";
		    }

		    // is it future date or past date
		    if($now > $unix_date) {    
		        $difference     = $now - $unix_date;
		        $tense         = "ago";
		        
		    } else {
		        $difference     = $unix_date - $now;
		        $tense         = "from now";
		    }
		    
		    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
		        $difference /= $lengths[$j];
		    }
		    
		    $difference = round($difference);
		    
		    
		    return "$difference$periods[$j]";
		}

		$date = "2009-03-04 17:45";
		$result = nicetime($date); // 2 days ago

		?>


<!-- PHP -->
<?php
//check for user cookie
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

		<?php
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
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a class="active" href="myprofile.php">My Profile</a></li>
									<li><a href="notifications.php">Notifications</a></li>
									<li><a href="followers.php">Followers</a></li>
									<li><a href="settings.php">Settings</a></li>
								</ul>
							</div>	
					<div class="col-sm-7">
					<font style="color: white; font-size:24px;"><h><center>MY PROFILE</center></h></font>
					<div id="flip"><center><ul><li><a>Create Post</a></li></ul></center></div>
					<div id="panel2">
						<form method="post" action="post.php">
							<input name="title" id="name" type="text" placeholder="Title" maxlength="100" required>
			          		<textarea type="text" name="content" width="100%"></textarea><br>
			          		<input id="submitButton" type="submit" value="POST">
		    			</form>
					</div>
					<div id="OlderPosts">
					<font style="color: black; font-size:24px;"><h><center>MY POSTS</center></h></font><br>
					<!-- PHP for posts by user -->
						<?php
						//gather posts based on user
							$user = $_COOKIE['mahindra'];
						 	$sql2 = "select * from loginpass where username = '$user'";
								$eq2 = mysql_query($sql2, $con);
								while($row2=mysql_fetch_array($eq2)){
									$firstname = $row2['first_name'];
									$lastname = $row2['last_name'];
								}
								//get user full name from table
								$name = $firstname.' '.$lastname;

							$con=mysql_connect("localhost","root");
							mysql_select_db("Harsh");
							$sql="select * from posts where username = '$user' ORDER BY dateofpost DESC";
							$eq=mysql_query($sql,$con);
							while($row=mysql_fetch_array($eq)){
								$id = $row['id'];
								$content=$row['content'];
								$title=$row['post_title'];
								$timeofpost=$row['dateofpost'];
								$time = nicetime($timeofpost);
								$upvotes=$row['upvotes'];
								$downvotes=$row['downvotes'];
								// print the post along with user's name (HTML formatting)
								echo"<div id=\"post\">
								<ul><b>\"$title\" - <i>$name</i></b><li>
									<table><tr><font color=\"black\"><pre>$content</pre></tr><td><font size=\"2%\" color=\"black\"><b>$time ago</b> <a href=\"upvote.php?id=$id\">Like ($upvotes)</a> | <a href=\"comment.php?id=$id\">Comment </a></td></table>
								</li></ul></div>";

							}		
							?>
							<!-- END PHP -->
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
<!-- author Harsh Keswani therealharsh -->