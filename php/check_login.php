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
$username = "_Anonymous";
$password = "_pass";
if (array_key_exists('uname', $_POST) && array_key_exists('psw', $_POST)) {
	
	$username = $_POST['uname']; //the submitted username
	$password = $_POST['psw']; //the submitted password
	
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = $mysqli->real_escape_string($username);
	$password = $mysqli->real_escape_string($password);
}
$result = $mysqli->query("SELECT * FROM users WHERE username='$username' and password='$password' ");
if($result && $result->num_rows == 1){
	$_SESSION['isLoggedIntoPanoply'] = true;
	$_SESSION['username'] = $username;
}else{
	$_SESSION['isLoggedIntoPanoply'] = false;
}
echo(var_dump($_SESSION));
echo "<script>window.close();</script>";

?>