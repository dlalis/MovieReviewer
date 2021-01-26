<?php
session_start();
require_once('includes/dbh.php');
$conn=db_connect();

//if sumbit button isnt pressed
if(!isset($_POST['submit'])){ 
	include "registerform.php";
}
else{
	$fname=$_POST['name'];  
	$pass=$_POST['pass'];
	$conf_pass=$_POST['conf_pass'];
	$email=$_POST['email_input'];

	$errors=array();

	//database check's
	$sql = "SELECT id FROM users WHERE username='$fname' LIMIT 1";
	$result = $conn->query($sql);
	if($result -> num_rows > 0){
		array_push($errors,"Name already exist.");
	}

	$sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
	$result = $conn->query($sql);
	if($result -> num_rows > 0){
		array_push($errors,"Email already exist.");
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($errors,"Wrong Email format");
	}

	if(strlen($pass) < 5){
		array_push($errors,"Password less than 5 characters.");
	}
	if($pass != $conf_pass){
			array_push($errors,"You typed 2 different passwords.");
	}

	if(!empty($errors)){
		$_SESSION['regerrors'] = $errors;
	
		include "registerform.php";
	}
	else{
		$ids = "SELECT id FROM users ORDER BY id DESC LIMIT 1";
		$rs = $conn->query($ids);
		
		//properly use of id cause of some problems with auto increment from MySql
		$nextAvailableId  = 1;
		
		if($row = $rs->fetch_assoc()) {
			$nextAvailableId = $row['id'] + 1;
		}
		
		//encrypt the password before saving in the database
		$password = md5($pass);

		$sql = "INSERT INTO users(id,username, password, email, role)
		VALUES ('$nextAvailableId','$fname' , '$password' , '$email' , 0)";

		$result = $conn->query($sql);
		$_SESSION['user']=$fname;
		header("Location: home.php");
		die();
	}
}

?>