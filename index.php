<?php
//Start a session If is not started
if (session_status() == PHP_SESSION_NONE) 
	session_start();	

//make the db connection
require_once('includes/dbh.php');
$conn = db_connect();	

	if(!isset($_POST['submit'])){
		//if user has already logged in,redirect him to home page
		if(isset($_SESSION['user'])){	
			 header("Location: user.php");
		}
		//else user must log in
		include "login.php";	
	}else{
		if(!isset($_SESSION['user'])){
				$fname = $_POST['username_input'];
				$pass = $_POST['password_input'];

				$errors=array();

				$sql = "SELECT * FROM users WHERE username='$fname' AND password='$pass'";
				$result = $conn->query($sql);

				if(!$row = $result->fetch_assoc()){
					array_push($errors,"Username/Password is incorrect.");
					if(!empty($errors)){
						foreach($errors as $e){
							/*	echo "<p class='errors'>$e</p>"; */
								echo "
									<center>
										<div class='alerts alerts-danger'  style='width:25rem;text-align: center;'>
											<strong> $e </strong>
										</div>
									</center>
								";
						}
						include "login.php";
					}
				}
				else{
					$_SESSION['user'] = $fname;
					header("Location: user.php");
				}
		}
	}
?>