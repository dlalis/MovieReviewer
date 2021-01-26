<?php
if (session_status() == PHP_SESSION_NONE) 
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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

         <div id="username_wrapper" class="input_wrapper">
      		    <input id="reg_username_input_id" class="input" type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" placeholder="Username" onclick="myFunctionName();" onchange="myFunctionName();" required>
         </div>
          <div id="email_wrapper" class="input_wrapper">
            <input id="email_input_id" class="input" type="text" name="email_input" placeholder="Email" value="<?php if(isset($_POST['email_input'])) echo $_POST['email_input']; ?>" onclick="myFunctionEmail();" onchange="myFunctionEmail();" required>
          </div> 

          <div id="password_wrapper" class="input_wrapper">
           <input id="reg_password_input_id" class="test" type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>" placeholder="Password" onclick="myFunctionPass();" onchange="myFunctionPass();" required>
          </div>

          <div id="password1_wrapper" class="input_wrapper">
             <input id="password_check_input_id" class="input" type="password" name="conf_pass" value="<?php if(isset($_POST['conf_pass'])) echo $_POST['conf_pass'];?>" placeholder="Cofirm Password"onclick="myFunctionPass();" onchange="myFunctionPass();" required> 
          </div>

          <br1><br>
          <input type="submit" class="fadeIn fourth" name="submit" value="Register">  
    </form>
  </div>
</div>


</body>
</html>
