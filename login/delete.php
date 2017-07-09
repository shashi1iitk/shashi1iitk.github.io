<?php
require 'databaseC.php';
ob_start();
session_start();


if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	$query="DELETE FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
	if(mysql_query($query)){
	?>
	<body>
		<title>Delete account</title>
		<link rel="shortcut icon" href="logo.ico" type="x-icon">
		<style type="text/css">
		body{background-color:rgba(150,255,255,0.7);}
		</style>
	</body>
	<style type="text/css">
	h1{font-family:cursive;font-size:36px;}
	#log{font-family:cursive;text-decoration:none;}
	#log:hover{text-decoration:underline;color:red;}
	#ne{font-family:cursive;}
	</style>
	<center>
	<div id="content"><br /><br /><br /><br /><br /><br />
			<h1>Your account has been successfully deleted!</h1><br /><br />
			<div id="ne">Have another account?<a href="log.php" id="log">Log in</a><br /></div>
			<div id="ne">Create a new account?<a href="register.php" id="log">Register</a></div>
			</div>
			</center>
	<?php
	session_destroy();
	}else{
?>
	<style type="text/css">
	h1{font-family:cursive;font-size:36px;}
	#log{font-family:cursive;text-decoration:none;}
	#log:hover{text-decoration:underline;color:red;}
	#ne{font-family:cursive;}
	</style>
	<center>
	<br /><br /><br /><br /><br /><br />
			<h1 style="{font-family:cursive;font-size:36px;">Some error happened.Try again later!</h1>
			<div id="ne">Have another account?<a href="log.php" id="log">Log in</a><br /></div>
			<div id="ne">Create a new account?<a href="register.php" id="log">Register</a></div>
			</center>
<?php
	}
}else{
	session_destroy();
	require 'log.php';
}