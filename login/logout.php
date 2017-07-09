<?php
require 'require.php';
if(session_destroy()){
?>
	<style type="text/css">
		body{background-color:rgba(150,255,255,0.7);}
	h1{font-family:cursive;font-size:36px;}
	#log{font-family:cursive;text-decoration:none;}
	#log:hover{text-decoration:underline;color:red;}
	#ne{font-family:cursive;}
	</style>
	<center>
	<div id="content"><br /><br /><br /><br /><br /><br />
			<h1>Your are successfully logged out!</h1><br /><br />
			<div id="ne">Want to log in again?<a href="log.php" id="log">Log in</a><br /></div>
			<div id="ne">Create a new account?<a href="register.php" id="log">Register</a></div>
			</div>
			</center>
	<?php
}else
echo 'Log out unsuccessful.Try again later.';


?>