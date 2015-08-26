<?php
	$id = $_GET['id'];
	$con=mysql_connect("localhost","root") or die(mysql_error());
	mysql_select_db("Harsh");
	$sql = "select url from images where id=$id";
	$eq=mysql_query($sql,$con);

	$row = mysql_fetch_assoc($eq);
	$img = $row['url'];

?>

<body>
<img src="<?php echo $img ?>" width="175" height="200" />
</body>