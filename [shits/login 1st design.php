<?php
if (session_status() == PHP_SESSION_NONE) 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Movie Reviewer</title>
    <link rel="stylesheet" href="css/master.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body>

  <p id="logo_id" style="cursor: default">Movie Reviewer</p>

    <div class="login_ui_container">
      <div class="login-form">
        <div id="id00" class="sign_in">
          <form id="form_id" action="" method="POST">

            <div id="username_wrapper" class="input_wrapper">
              <input id="username_input_id" class="input" type="text" name="username_input" placeholder="Username" required>
            </div>

            <div id="password_wrapper" class="input_wrapper">
              <input id="password_input_id" class="input" type="password" name="password_input" placeholder="Password" required>
            </div>
            <!--  <input type="submit" class="button" name="submit" value="Push me">  -->

            
              <p id="signUp_btn_id" class="sign_up" onclick="moveDown()">You don't have an account? <a href="register.php" class="sign_up">SignUp</a></p>

             
          </form>

        </div>
    </div>
   </div>

   <button type="submit" class="btncenter btn btn-primary" name="submit">Log In</button>

</body>
</html>
