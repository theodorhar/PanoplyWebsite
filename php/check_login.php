<?php
$servername = "db";
$username = "auth";
$password = "authpassword9CKW8";
$tablename = "users";

// Create connection
$authconn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($authconn->connect_error) {
  die("Connection failed: " . $authconn->connect_error);
}
echo "Connected successfully";
session_start();
$loginst = 0;

//REMOVE ME LATER
$_SESSION['username'] = "test";

if ($_SESSION['username']){ 
	$user_check = $_SESSION['username'];
	$ses_sql = mysqli_query($db,"SELECT username FROM users WHERE username='$user_check' ");
	$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	$login_user=$row['username'];

	if(!empty($login_user)) 
	{
	   $loginst = 1;
	}

}

?>