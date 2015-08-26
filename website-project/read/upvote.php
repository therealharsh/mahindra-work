<!-- author Harsh Keswani therealharsh -->
<?php
//function to check if user has already liked a particular post (potential future use)
function contains($needle, $haystack)
{
return strpos($haystack, $needle) !== false;
}
?>

<?php
$user = $_COOKIE['mahindra'];
//retrieve specific post ID
$id=$_GET['id']; 
$con=mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("Harsh");
//update the number of likes by 1 for a particular post
$sql = "UPDATE posts SET upvotes = upvotes + 1 WHERE id='$id'";
mysql_query($sql, $con);
//echo"success";
//redirect
header("Location: myprofile.php");
?>
<!-- THE END -->
<!-- author: Harsh Keswani, @therealharsh -->