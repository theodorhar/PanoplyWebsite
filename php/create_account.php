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
function sqlescape($string,$conn){
	$string = stripslashes($string);
	$string = $conn->real_escape_string($string);
	return $string;
}
	$_SESSION['invalidcreate'] = false;
	if ($_POST['psw'] != $_POST['pswconfirm']){
		$_SESSION['invalidcreate'] = true;
	}
	$firstname = sqlescape($_POST['fname'],$mysqli);
	$lastname = sqlescape($_POST['lname'],$mysqli);
	$email =  sqlescape($_POST['email'],$mysqli);
	$username = sqlescape($_POST['uname'],$mysqli);
	$password = password_hash(sqlescape($_POST['psw'],$mysqli),PASSWORD_DEFAULT);
	$confirm = sqlescape($_POST['pswconfirm'],$mysqli);
	if($_SESSION['invalidcreate'] == false){
		$stmt = $mysqli->prepare("INSERT INTO users (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss",$firstname, $lastname, $email, $username,$password);
		if ($stmt->execute() === TRUE) {
			$_SESSION['isLoggedIntoPanoply'] = true;
			$_SESSION['username'] = $username;
		} else {
		  $_SESSION['invalidcreate'] = true;
		  $_SESSION['isLoggedIntoPanoply'] = false;
		}
	}else{
		$_SESSION['invalidcreate'] = true;
		$_SESSION['isLoggedIntoPanoply'] = false;
	}
echo(var_dump($_SESSION));
echo "<script>window.close();</script>";

?>