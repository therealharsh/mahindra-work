<!-- author Harsh Keswani therealharsh -->
<?php
$user = $_COOKIE['mahindra'];
$id=$_GET['id']; 
$postContent=$_POST['name'];
//adding slashes to handle special chars
$contentAddSlash = addslashes($postContent);
//stripping tags to avoid sql injections
$content = strip_tags($contentAddSlash);
$con=mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("Harsh");
//inserting comment into DB
$updateInfo = "INSERT INTO post_comment(id, user, content, datenow) VALUES ('$id', '$user', '$content', NOW());";
mysql_query($updateInfo, $con);
//redirecting back to comment page for particular post based on Post ID
header('Location: comment.php?id='.$id);
?>
<!-- THE END -->
<!-- author Harsh Keswani therealharsh -->