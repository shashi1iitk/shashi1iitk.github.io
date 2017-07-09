<?php
require 'databaseC.php';
ob_start();

if(isset($_POST['firstname'])&&isset($_POST['surname'])&&isset($_POST['email'])&&isset($_POST['mobile'])&&isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['security'])&&isset($_POST['answer'])){
	$firstname=$_POST['firstname'];
	$surname=$_POST['surname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	$security=$_POST['security'];
	$answer=$_POST['answer'];

	if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)&&!empty($email)&&!empty($mobile)&&!empty($security)&&!empty($answer)){
		if(!strpos($email, '@')){
		?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Enter valid email address!</div>
			<?php
		}else if(!strpos($email, '.com')){
			?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Enter valid email address!</div>
			<?php
		}else{
		$quer ="SELECT `username` FROM `users` WHERE `email`='$email'";
		$quer_run=mysql_query($quer);
		if(mysql_num_rows($quer_run)==1){
			?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Email already exist,Use other email!</div>
			<?php
		}else{
			if($password!=$password_again){
			?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Password not matched!</div>
			<?php
			}else if((strlen($password)<=4)){
			?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Password length must be greater than four and it must contain a special character!</div>
			<?php
		}else if((strpos($password, '@'))||(strpos($password, '#'))||(strpos($password, '$'))||(strpos($password, '^'))||(strpos($password, '&'))||(strpos($password, '*'))||(strpos($password, '+'))||(strpos($password, '_'))||(strpos($password, ')'))||(strpos($password, '('))||(strpos($password, '/'))){
			$queryy ="SELECT `username` FROM `users` WHERE `username`='$username'";
			$queryy_run=mysql_query($queryy);
				if(mysql_num_rows($queryy_run)==1){
				?>
				<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Username already exist,choose another!</div>
				<?php
				}else{
				$query="INSERT INTO `users` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."','$email','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($security)."','".mysql_real_escape_string($answer)."','','','','','','','','','','')";
				if($query_run=mysql_query($query)){
				header('Location:registered.php');
			}else{
				?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Sorry we cannot register you this time.Try after sometime.</div>
			<?php
			}
		}
		}else{
			?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*Password must contain a special character!</div>
			<?php 
		}
	}
}
	}else{
		?>
			<div style="color:red;position:absolute;top:539px;left:475px;font-family:cursive;font-size:14px;">*All fields are required!</div>
			<?php
	}
}
?>


<html>
<head>
	<title>Registration Form</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
<style type="text/css">
body{cursor:default;}
 body{background:-webkit-linear-gradient(top,cyan,white);}
#create{font-family:cursive;font-size:45px;font-weight:bold;opacity:1.0;color:#373737;cursor:default;}
#free{font-family:cursive;font-size:22px;cursor:default;}
#first{position:relative;width:555px;padding:0px;opacity:1;}
#fname{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
#sname{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
#email{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
#mobile{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;width:400px;}
#username{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
#password{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
#acc{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
#acc:hover{background-color:white;color:#5D9840;}
#login{font-family:cursive;cursor:default;}
#log{text-decoration:none;cursor:pointer;}
#log:hover{text-decoration:underline;color:red;}
#log:active{color:blue;}
#ch{cursor:pointer;}
#invalid{color:red;position:relative;top:-100px;left:130px;font-family:cursive;font-size:14px;}
</style>
</head>
<body>
<center>
<form action="register.php" method="POST">
<div id="create">Create an account</div>
<div id="free" >It is free and always will be</div><hr />


<div id="first">
<input id="fname" placeholder="First name" type="text" value="<?php if(isset($firstname)){ echo $firstname;} ?>" maxlength="40" size="14%" name="firstname" />

<input id="sname" placeholder="Surname" type="text" value="<?php if(isset($surname)){ echo $surname;} ?>" maxlength="40" size="14%" name="surname" />
</div><br />



<input id="email" placeholder="Email address" type="text" value="<?php if(isset($email)){ echo $email;} ?>" maxlength="40" size="34%" name="email" / ><br /><br />

<input id="mobile" placeholder="Mobile number" type="number" value="<?php if(isset($mobile)){ echo $mobile;} ?>" maxlength="14" size="34%" name="mobile" / ><br /><br />

<input id="username" placeholder="Choose username" type="text" value="<?php if(isset($username)){ echo $username;} ?>" maxlength="30" size="34%" name="username" /><br /><br />

<input id="password" placeholder="Password" type="Password" size="34%" maxlength="40" name="password" /><br /><br />

<input id="password" placeholder="Confirm Password" type="Password" size="34%" maxlength="40" name=password_again /><br /><br />

<input id="password" placeholder="Security question" type="text" size="34%" maxlength="50" name="security" /><br /><br />

<input id="password" placeholder="Answer" type="Password" size="34%" maxlength="40" name="answer" /><br /><br />

<input id="acc" type="submit" value="Create an account"><br />
<div id="login">Already have an account?<a href="log.php" id="log">Log in</a></div>

</form></center>
<script type="text/javascript">
	function func(){
		alert('hello');
	
	}
</script>
		
</body>
</html>
