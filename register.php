<?php
session_start();
require_once('includes/dbh.php');
$conn=db_connect();

	if(!isset($_POST['submit'])){ //an den exw pathsei to koumpi
			include "registerform.php";

	}else{//kapoios/a kati path to koumpi
		//print_r ($_POST);
		$fname=$_POST['name'];  
		$pass=$_POST['pass'];
		$conf_pass=$_POST['conf_pass'];
		$email=$_POST['email_input'];

		$errors=array();

		$sql = "SELECT id FROM users WHERE username='$fname' LIMIT 1";
		$result = $conn->query($sql);
		if($result -> num_rows > 0){
			array_push($errors,"Name already exist.");
		}

		if(strlen($fname)<5){
			array_push($errors,"Username less than 5 characters.");
		}

		$sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
		$result = $conn->query($sql);
		if($result -> num_rows > 0){
			array_push($errors,"Email already exist.");
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			array_push($errors,"Wrong Email format");
		}

		if(strlen($pass)<5){
			array_push($errors,"Password less than 5 characters.");
		}

		if($pass != $conf_pass){
				array_push($errors,"You typed 2 different passwords.");
		}

		if(!empty($errors)){
      //yparxoun errors                  width:24rem;text-align: center;
			//echo "<h2>Exeis ta parakatw errors</h2>";
		//	foreach($errors as $e){
        /*	echo "<p class='errors'>$e</p>";*/
        //echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
				//echo " <script type='text/javascript'> alert(\"$errors[0]\"); </script>	";
        
        echo "
				
				<div class='alerts3 ggg alerts-danger' >
					<strong> $errors[0] </strong>
				</div>
        

				";

        include "registerform.php";
		//	}
		
		}
		else{
			$sql = "INSERT INTO users(username, password, email)
			VALUES ('$fname' , '$pass' , '$email')";

			$result = $conn->query($sql);
			$_SESSION['user']=$fname;
	//		$_SESSION['id'] = $row['id'];
		//	echo "Well done!!!<br>";
			header("Location: user.php?=registered&successfull");
			die();
		}
	}
?>

<script>
function alertIt() {
  if(!empty($errors))
    alert($errors[0]);
}
</script>

