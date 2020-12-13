<?php
if (session_status() == PHP_SESSION_NONE) 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Reviewer</title>
    <link rel="stylesheet" href="css/master1.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>

  <p id="logo_id" style="cursor: default">Movie Reviewer</p>


   <div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->

    <br>
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
          <br1><br><br>
          <input type="submit" class="fadeIn fourth" name="submit" value="Log In">
    </form>
    <br>
    
   

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" onclick="moveDown()" href="register.php">You dont have an account? Register</a>
    </div>

  </div>
</div>




</body>
</html>
