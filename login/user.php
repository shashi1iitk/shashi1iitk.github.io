
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	<style type="text/css">
	body{margin:0px;padding:0px;color:darkgrey;background:-webkit-radial-gradient(center,circle,yellow 0%,red 50%,pink 75%,darkorange 100%);}

		.container{max-width:960px;width:96%;margin:auto;}


		header{background:#fff;margin-bottom:20px;overflow:hidden;}

		.logo{float:left;margin-top:10px;}

		nav{float:right;line-height:0px;}

		nav li{display:inline-block;padding:5px 20px;margin-left:10px;background:#f3f3f3;line-height:normal;}

	#username{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
	#password{position:relative;border:1px solid grey;font-size:19.8px;padding:6px;border-radius:5px;}
	#login{position:relative;padding-top:8px;padding-bottom:8px;padding-left:20px;padding-right:20px;font-size:20px;border:1px solid #4169E1;background-color:#5D9840;color:white;border:1px solid grey;border-radius:5px;font-family:sans-serif;cursor:pointer;transition:all 0.2s;}
	#login:hover{color:#5D9840;background-color:white;}
	#new{font-family:cursive;font-size:18px;cursor:default;display:inline-block;color:black;}
	#create{text-decoration:none;color:blue;font-size:18px;font-family:cursive;}
	#create:hover{text-decoration:underline;color:green;}
	h1{font-family:sans-serif;font-size:35px;color:brown;cursor:default;text-decoration:underline;font-weight:500;}
	#invalid{position:relative;top:-240px;left:545px;font-family:cursive;color:red;display:inline-block;}
	#forget{position:relative;top:-18px;left:60px;text-decoration:none;font-family:cursive;font-size:18px;}
	#forget:hover{color:red;text-decoration:underline;}
</style>
</head>
<body>
<header>
	<div class="container">
		<div class="logo">
			<img src="images.png" width="200">
		</div>
		<nav>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</nav>
	</div>
</header>
<center>
<h1>Welcome User</h1><br /><br />
<form action="<?php echo $current_file; ?>" method="POST">
<input type="text" placeholder="Username" id="username" name="username"><br /><br />
<input type="Password" placeholder="Password" id="password" name="password"><br /><br />
<div ><a href="forpass.php" id="forget">Forget password?</a></div>
<input type="submit" id="login" value="Log in">
</form><br />
<div id="new">New Here? </div><a href="register.php" id="create">Create an account.</a>
</center>
</body>
</html>
<?php

if(isset($_POST['username'])&&isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username)&&!empty($password)){
	$query="SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password)."'";
	if($query_run=mysql_query($query)){
		$query_num_rows=mysql_num_rows($query_run);
		if($query_num_rows==0){
			?>
			<div id="invalid">*Invalid username/password combination</div>
			<?php
		}else if($query_num_rows==1){
		 	$user_id=mysql_result($query_run,0,'id');
			$_SESSION['user_id']=$user_id;
			header('Location:log.php');
		}

	}

}else{
?>
			<div id="invalid">*Fill all slots First!</div>
			<?php
		}
}
?>