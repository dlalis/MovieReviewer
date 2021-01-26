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

    <!-- Login Form -->
    <form id="form_id" action="" method="POST"> 

      <div id="username_wrapper" class="input_wrapper">
        <input id="username_input_id" class="input" type="text" name="username_input" placeholder="Username" required>
      </div>

      <div id="password_wrapper" class="input_wrapper">
        <input id="password_input_id" class="input" type="password" name="password_input" placeholder="Password" required>
      </div>

      <input type="submit" class="fadeIn fourth" name="submit" value="Log In">


      <!-- Print Errors on log in -->
      <span>
        <?php 
        if(isset($_SESSION['errors'])){
          $errors = $_SESSION['errors'];

          if(!empty($errors)){
            foreach($errors as $e){
              echo "<p class=' alerts-danger-error'>$e</p>";
            }
          }
        }
        ?> 
      </span> 

    </form>

    <br>
    <!-- Sign Up -->
    <div id="formFooter">
      <a class=" underlineHover signup" href="register.php">You dont have an account? Sign Up</a>
    </div>

  </div>
</div>




</body>
</html>