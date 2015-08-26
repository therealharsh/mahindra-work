<?php
	$con=mysql_connect("localhost","root") or die(mysql_error());
	mysql_select_db("Harsh");
	$sql = "select url from images where id=1";
	$eq=mysql_query($sql,$con);

	while($row=mysql_fetch_array($eq))
	{
		$url=$row['url'];
	}
	echo $url;
?>