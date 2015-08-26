<!-- author Harsh Keswani therealharsh -->
<?php
//get post title
$titleContent=$_POST['title'];
//get post content
$postContent=$_POST['content'];
//add slashes to retrieve content to handle various characters (mysqli string escape not supported on server) 
$contentAddSlash = addslashes($postContent);
$titleAddSlash = addslashes($titleContent);
//strip tags to avoid SQL injections
$content = strip_tags($contentAddSlash);
$title = strip_tags($titleAddSlash);
$user = $_COOKIE['mahindra'];
//randomly generated unique id for user post
$id = uniqid();
$con=mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("Harsh");
//insert info into DB
$updateInfo = "INSERT INTO posts(id, username, post_title, content, dateofpost) VALUES ('$id', '$user', '$title', '$content', NOW());";
mysql_query($updateInfo, $con);
header('Location: myprofile.php');
?>
<!-- THE END -->
<!-- author: Harsh Keswani, @therealharsh -->