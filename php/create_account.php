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
	$result = $mysqli->query("SELECT * FROM users WHERE username='$username'");
if($result && $result->num_rows == 1){
	$_SESSION['isLoggedIntoPanoply'] = false;
}elseif($_SESSION['invalidcreate'] == false){
	$stmt = $mysqli->prepare("INSERT INTO users (firstname, lastname, email, username, password) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss",$firstname, $lastname, $email, $username,$password);
	if ($stmt->execute() === TRUE) {
	  echo "New User created successfully";
		$_SESSION['isLoggedIntoPanoply'] = true;
		$_SESSION['username'] = $username;
	} else {
	  echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
	
}
echo(var_dump($_SESSION));
echo "<script>window.close();</script>";

?>