<?php
	$name=$_POST['name'];
	$id=$_POST['id'];

	$con=mysql_connect("localhost","root") or die(mysql_error());
	mysql_select_db("Harsh");
	$sql = "select * from haktest";
	$eq=mysql_query($sql,$con);

	while($row=mysql_fetch_array($eq))
	{
		$name2=$row['name'];
		$user_id=$row['id'];
		if($id==$user_id&&$name==$name2){
			header("Location: http://localhost/website-project/landing");
		}
	}
?>