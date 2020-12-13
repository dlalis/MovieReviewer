<?php
session_start();
include 'dbh.php';


$uid = $_POST['name'];
$pwd = $_POST['pass'];
$email = $_POST['email'];


$sql = "INSERT INTO data(username, password, email)
VALUES ('$uid' , '$pwd' , '$email')";


$result = $conn->query($sql);

header("Location: ../index.php");
