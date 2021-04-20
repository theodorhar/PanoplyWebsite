<?php
session_start();
$servername = "db";
$username = "auth";
$password = "authpassword9CKW8";
$dbname = "users";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$username = "test";
$password = "pass";
if (array_key_exists('username', $_POST) && array_key_exists('password', $_POST)) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = $mysqli->real_escape_string($username);
	$password = $mysqli->real_escape_string($password);
}
$result = $mysqli->query("SELECT * FROM $dbname WHERE username='$username' and password='$password' ");

if($result && $result->num_rows == 1) 
{
	$_SESSION['isLoggedIntoPanoply'] = true;
	$_SESSION['username'] = $username;
}else{
	$_SESSION['isLoggedIntoPanoply'] = false;
}

?>