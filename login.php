<?php include('server.php'); ?>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel = "stylesheet" type="text/css" href="stylel.css">

</head>
<body>
      <div style="background-color:#FDCBA5 ;color:black " class="header">
            <h2> Login </h2>
      </div>

      <form method="post" action="login.php">
            <!-- Validation errors here-->
            <?php include('errors.php'); ?>
            <div class="input-group"> 
                  <label> Username </label>
                  <input type="text" name="username">
            </div>
            <div class="input-group"> 
                  <label> Password </label>
                  <input type="password" name="password">
            </div>
            <div class="input-group"> 
                  <button style="background-color:#FDCBA5 ;color:black;"type="submit" name="login" class="btn"> Login </button>
            </div>
            <p>
                  Not a member? <a href="register.php"> Sign up </a>
            </p>
      </form>


</body>
</html>