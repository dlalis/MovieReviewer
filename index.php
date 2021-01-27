<?php
//Start a session If is not started
if (session_status() == PHP_SESSION_NONE) 
	session_start();	

//make the db connection
require_once('includes/dbh.php');
$conn = db_connect();	

$errors=array();

	if(!isset($_POST['submit'])){
		//if user has already logged in,redirect him to home page
		if(isset($_SESSION['user'])){	
			header("Location: home.php");
		}
		//else user must log in
		include "login.php";	
	}
	else{
		if(!isset($_SESSION['user'])){
			$fname = $_POST['username_input'];
			$pass = $_POST['password_input'];

			//$errors=array();

			//encrypt the password
			$password = md5($pass);

			$sql = "SELECT * FROM users WHERE username='$fname' AND password='$password'";
			$result = $conn->query($sql);

			//check if user exist
			if(!$row = $result->fetch_assoc()){
				array_push($errors,"Username Or Password is incorrect.");

				$_SESSION['errors'] = $errors;

				include "login.php";
			}
			else{
				//taking the user role , 1 for admin , 0 for users

				$sql = "SELECT * FROM users WHERE username = '$fname' LIMIT 1";
				$result = $conn->query($sql);

				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						$urole = $row["role"];
					}

				}
				
				$_SESSION['role'] = $urole;
				$_SESSION['user'] = $fname;

			header("Location: home.php");
			}
		}
	}
	
?>
