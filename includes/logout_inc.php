<?php
session_start();


if(!isset($_SESSION['user'])){
	header("Location: ../index.php");
}else{
	session_unset();
	session_destroy();
}

header("Location: ../index.php");
die();
