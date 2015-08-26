<!-- author Harsh Keswani therealharsh -->
<!-- LOGIN PAGE FOR MAHINDRA RISE PROJECT -->
<head>
  <link rel="shortcut icon" href="favicon.ico"> 
  <?php
  if(isset($_COOKIE['mahindra'])){
    header("Location: /landing");
  }
  ?>
</head>

<!-- START PHP -->
<?php
	$username=$_POST['name']; //get username
	$password=$_POST['id']; //get password

  $salt = 'saltTest'; //salt for password

  $hash = md5($salt . $password); //encrypt password using md5

	$con=mysql_connect("localhost","root") or die(mysql_error());
	mysql_select_db("Harsh");

	$sql = "select * from loginpass where username = '$username'"; //sql query look up username
	
  $eq=mysql_query($sql,$con);

	while($row=mysql_fetch_array($eq))
	{
		$username2=$row['username'];
		$password2=$row['password'];
		if($hash==$password2&&$username==$username2){
			header("Location: http://localhost/website-project/landing");
      $cookie_name = "mahindra";
      $cookie_value = $username;
      setcookie($cookie_name, $cookie_value, time()+(365 * 24 * 60 * 60), "/");
		}

		else{
			header("Location: http://localhost/website-project/retry.html");
		}
	}
?>

<!-- END PHP -->

<!-- BEGIN HTML -->

<html >
  <head>
    <meta charset="UTF-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/style.css">
  </head>


  <body>
    <body class="align">
      <div class="site__container">

        <div class="grid__container">
        <p><center>Authentification failed. Please try again</center></p>

          <form action="login.php" method="post" class="form login">

            <div class="form__field">
              <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
              <input id="login__username" name="name" type="text" class="form__input" placeholder="Username" required>
            </div>

            <div class="form__field">
              <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
              <input id="login__password" name="id" type="password" class="form__input" placeholder="Password" required>
            </div>

            <div class="form__field">
              <input type="submit" value="Sign In">
            </div>

          </form>

        </div>

      </div>

</body>
</html>
<!-- THE END -->