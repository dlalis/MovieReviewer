<?php
session_start();
include 'dbh.php';
include '../index.php';

$uinp = $_POST['username_input'];
$pwd = $_POST['password_input'];

$sql = "SELECT * FROM data WHERE username='$uinp' AND password='$pwd'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
  echo "";
  header("Location: ../index.php");
}
else{
  $_SESSION['id'] = $row['id'];
  header("Location: ../home.php");
}
