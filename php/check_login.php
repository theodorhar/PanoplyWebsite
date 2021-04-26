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
	$username = stripslashes($username);
	$username = $mysqli->real_escape_string($username);
}
$result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
if($result && $result->num_rows == 1 && password_verify($_POST['psw'],$result->fetch_assoc()["password"])){
	$_SESSION['isLoggedIntoPanoply'] = true;
	$_SESSION['username'] = $username;
}else{
	$_SESSION['isLoggedIntoPanoply'] = false;
}
echo(var_dump($_SESSION));
echo "<script>window.close();</script>";

?>