<!-- author Harsh Keswani therealharsh -->
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/style.css">
  </head>

<!-- PHP -->
 <?php
 //check if user cookie is logged in
  if(isset($_COOKIE['mahindra'])){
    header("Location: landing");
  }
  ?>

  <!-- HTML -->

  <body>
    <body class="align">
      <div class="site__container">

        <div class="grid__container">

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
    
    
    
    
    
  </body>
</html>
