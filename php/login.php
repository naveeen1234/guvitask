<?php

session_start();

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == "admin" && $password == "pass")
	{
		$_SESSION['logged_in'] = true;
		header('Location: dashboard.php');
		exit;
	}
	else
	{
		$message = "Invalid username and/or password";
	}
}

?>