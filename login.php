<?php
if (session_status() == PHP_SESSION_NONE) 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Reviewer</title>
    <link rel="stylesheet" href="css/login.css?rnd=23">
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
   <div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form id="form_id" action="" method="POST"> 
       <!-- <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">-->
     <div id="username_wrapper" class="input_wrapper">
            <input id="username_input_id" class="input" type="text" name="username_input" placeholder="Username" required>
          </div>

          <div id="password_wrapper" class="input_wrapper">
            <input id="password_input_id" class="input" type="password" name="password_input" placeholder="Password" required>
          </div>
          <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>
    <br>
    
   

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">You dont have an account? Sign In</a>
    </div>

  </div>
</div>




</body>
</html>
