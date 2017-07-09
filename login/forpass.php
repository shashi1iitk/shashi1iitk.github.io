<?php
session_start();
ob_start();
?>
<center>
<h1 style="font-family:cursive;">Recover Password</h1>
</center><hr />
<?php
require 'databaseC.php';
$GLOBALS['global']=0;
?>
<?php
if(isset($_POST['password'])&&isset($_POST['password_again'])){
	$GLOBALS['global'] = 1;
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	if(!empty($password)&&!empty($password_again)){
		if($password==$password_again){
			$query="UPDATE `users` SET `password`='".mysql_real_escape_string($password)."' WHERE `id`='".$_SESSION['forpass']."'";
			if(mysql_query($query)){
				
				header('Location:passup.php');
			}
		}else{
			?>
			<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
		<style type="text/css">
		body{background:-webkit-linear-gradient(top,green,white);}
				#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
                #acc:hover{background-color:white;color:#5D9840;}
			</style>
			</head>
			<center>
			<form action="forpass.php" method="POST">
			<br /><input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="New Password" type="Password" size="34%" maxlength="40" name="password" /><br /><br />
			<input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="Confirm Password" type="Password" size="34%" maxlength="40" name=password_again /><br />
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:-110px;display:inline-block;">*Password not matched!</div><br />
			<input id="acc" type="submit" value="Submit">
			</form>
			</center>
		<?php
		}
	}else{
		?>
		<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
		<style type="text/css">
		body{background:-webkit-linear-gradient(top,green,white);}
				#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
                #acc:hover{background-color:white;color:#5D9840;}
			</style>
			</head>
			<center>
			<form action="forpass.php" method="POST">
			<br /><input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="New Password" type="Password" size="34%" maxlength="40" name="password" /><br /><br />
			<input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="Confirm Password" type="Password" size="34%" maxlength="40" name=password_again /><br />
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:-130px;display:inline-block;">*Fill all slot first!</div><br />
			<input id="acc" type="submit" value="Submit">
			</form>
			</center>
		<?php
	}
}
if(isset($_POST['answer'])){
	$GLOBALS['global'] = 1;
	$answer=$_POST['answer'];
	if(!empty($_POST['answer'])){
		$query="SELECT `answer` FROM `users` WHERE `id`='".$_SESSION['forpass']."' AND `answer`='".mysql_real_escape_string($answer)."'";
		$query_run=mysql_query($query);
		if(mysql_num_rows($query_run)==1){
			?>
			<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
			<style type="text/css">
			body{background:-webkit-linear-gradient(top,green,white);}
				#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
                #acc:hover{background-color:white;color:#5D9840;}
			</style>
			</head>
			<center>
			<form action="forpass.php" method="POST">
			<br /><input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="New Password" type="Password" size="34%" maxlength="40" name="password" /><br /><br />
			<input id="password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" placeholder="Confirm Password" type="Password" size="34%" maxlength="40" name=password_again /><br /><br />
			<input id="acc" type="submit" value="Submit">
			</form>
			</center>
			<?php

		}else{
			?>
			<?php
			$query="SELECT `security` FROM `users` WHERE `id`='".$_SESSION['forpass']."'";
		$query_run=mysql_query($query);
		$security=mysql_result($query_run,0,'security');
		?>
		<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	<style type="text/css">
			body{background:-webkit-linear-gradient(bottom,red,white);}
	</style>
	</head>
		<center>
			<div id="invalid" style="font-family:cursive;font-size:22px">Your security question: <?php echo $security; ?></div>
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:-200px;display:inline-block;">*Wrong answer</div>
			<form action="forpass.php" method="POST">
				<input id="password" placeholder="Answer" type="Password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" size="34%" maxlength="40" name="answer" />
				<input type="submit" style="position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;" value="Submit">
			</form>
			</center>
			<?php
		}
	}else{
	?>
			<?php
			$query="SELECT `security` FROM `users` WHERE `id`='".$_SESSION['forpass']."'";
		$query_run=mysql_query($query);
		$security=mysql_result($query_run,0,'security');
		?>
		<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	<style type="text/css">
			body{background:-webkit-linear-gradient(top,orange,white);}
	</style>
	</head>
		<center>
			<div id="invalid" style="font-family:cursive;font-size:22px">Your security question: <?php echo $security; ?></div>
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:-200px;display:inline-block;">*Fill slot first!</div>
			<form action="forpass.php" method="POST">
				<input id="password" placeholder="Answer" type="Password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" size="34%" maxlength="40" name="answer" />
				<input type="submit" style="position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;" value="Submit">
			</form>
			</center>
			<?php
}
}
if(isset($_POST['username'])){
	$username=$_POST['username'];
	if(!empty($username)){
		$query="SELECT `id` FROM `users` WHERE `username`='$username'";
		$query_run=mysql_query($query);
		if(mysql_num_rows($query_run)==1){
			$id=mysql_result($query_run,0,'id');
			$_SESSION['forpass']=$id;
			$query="SELECT `security` FROM `users` WHERE `username`='$username'";
		$query_run=mysql_query($query);
		$security=mysql_result($query_run,0,'security');
		$GLOBALS['global'] = 1;
			?>
			<head>
	<title>Password Update</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	</head>
			<style type="text/css">
				body{background:-webkit-linear-gradient(top,orange,white);}
				#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
                #acc:hover{background-color:white;color:#5D9840;}
			</style>
			<center>
			<div id="invalid" style="font-family:cursive;font-size: 22px;display:inline-block;">Your security question: <?php echo $security; ?></div>
			<form action="forpass.php" method="POST">
				<input id="password" placeholder="Answer" type="Password" style="position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;" size="34%" maxlength="40" name="answer" />
				<input id="acc"  type="submit" value="Submit">
			</form>
			</center>
			<?php
		}else{
			?>
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:419px;display:inline-block;">*Invalid username</div>
			<?php
		}
	}else{
		?>
			<div id="invalid" style="color:red;font-family:cursive;position:relative;left:419px;display:inline-block;">*Enter username first!</div>
			<?php
	}
}
	
?>
<?php
if($GLOBALS['global'] == 0){
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Recover password</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	<style type="text/css">
	body{background:-webkit-linear-gradient(bottom,red,white);}
		#username{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
		#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
		#acc:hover{background-color:white;color:#5D9840;}
	</style>
</head>
<body>
<center>
<form action="forpass.php" method="POST">
<input id="username" placeholder="Enter Username" type="text" value="<?php if(isset($username)){ echo $username;}    ?>" maxlength="30" size="34%" name="username" />
<input type="submit" id="acc" value="Submit">
</form>
</center>
</body>
</html>
<?php 
}
 ?>
 <style type="text/css">

 	#recall{font-family:cursive;font-size:18px;}
 	#lo{text-decoration:none;}
 	#lo:hover{text-decoration:underline;color:red;}
 </style>
 <center>
 	<div id="recall">Password recalled? <a href="log.php" id="lo">Log in</a>
 
 </center>


