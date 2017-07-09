<?php
require 'databaseC.php';
ob_start();
session_start();
{
	?>
	<head>
		<title>Password update</title>
		<link rel="shortcut icon" href="logo.ico" type="x-icon">
	</head>
	<style type="text/css">
	body{background-color:rgba(150,255,255,0.7);}
	h1{font-family:cursive;cursor:default;}
	#login{font-family:cursive;font-size:20px;text-decoration:none;}
	#login:hover{text-decoration:underline;color:red;font-size:22px;}
	#create{font-family:cursive;font-size:20px;}
	</style>
	<center><br /><br /><br /><br /><br />
		<h1>Password updated successfully!</h1><br />
		<a href="log.php" id="login">Log in</a><br />
		<span id="create">Create a new account?</span><a href="register.php" id="login">Register</a>
	</center>
	<?php
}
?>