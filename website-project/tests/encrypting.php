<?php

	$con=mysql_connect("localhost","root") or die(mysql_error());
	$password = 'lola';
	$salt = 'saltTest';
	$hash = md5($salt . $password);
	echo $hash;

?>