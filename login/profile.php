<?php
require 'databaseC.php';
require 'require.php';


if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	$firstname=field('firstname');
	$surname=field('surname');
	$email=field('email');
	$mobile=field('mobile');
	$username=field('username');

	$name=$_FILES['file']['name'];
	$size=$_FILES['file']['size'];
	$type=$_FILES['file']['type'];

$extention=strtolower(substr($name,strpos($name,'.')+1));
$max_size=5163552;

$tmp_name=$_FILES['file']['tmp_name'];//For processing  the server locally
//$error=$_FILES['file']['error'];

if(isset($name)){
	if(!empty($name)){
		if(($extention=='jpg'||$extention=='jpeg')&&$type=='image/jpeg'&&$size<=$max_size){
		
		$location='img/';
		$name=$_SESSION['user_id'].'.jpg';
		if(move_uploaded_file($tmp_name,$location.$name)){
			$_SESSION['img']=$name;
			?>
			<div id="warm" style="font-family:sans-serif;position:absolute;top:582px;left:550px;color:green;font-size:14px;background-color:white;">*Upload successful!</div>
			<?php
		}else{
			?>
			<div id="warm" style="font-family:sans-serif;position:absolute;top:582px;left:550px;color:red;font-size:14px;background-color:white;">*Upload unsuccessful.Try again later.</div>
			<?php
		}
		}else{
		?>
			<div id="warm" style="font-family:sans-serif;position:absolute;top:582px;left:550px;color:red;font-size:14px;background-color:white;">*File must be jpeg/jpg format and less than 1Mb!</div>
			<?php
		}
	}else{
	?>
			<div id="warm" style="font-family:sans-serif;position:absolute;top:582px;left:550px;color:red;font-size:14px;background-color:white;">*Choose a file first!</div>
			<?php
		}
}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>My Profile</title>
		<link rel="shortcut icon" href="logo.ico" type="x-icon">
		<style type="text/css">
		body{margin:0px;padding:0px;background-image:url('ound.jpg');background-position:center center;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;}
	h1{font-size:35px;font-family:cursive;}
	#content{font-family:cursive;}
	#home{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:71px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:red;text-decoration:none;width:268px;}
#home{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:71px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:red;text-decoration:none;width:268px;}
#home:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}
#profile{font-size:29px;font-family:cursive;font-style:italic;background-color:skyblue;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:120px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:black;text-decoration:none;width:270px;}
#profile:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#new{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 36px 36px 2px;position:absolute;top:169px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:15px;color:red;text-decoration:none;width:275px;}
#new:hover{font-size:34px;z-index:999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#how{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:218px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:40px;color:red;z-index:999999;text-decoration:none;width:250px;}
#how:hover{font-size:34px;z-index:99;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#name{background-color:skyblue;}
#update{background-color:pink;display:inline-block;padding:2px;}
		</style>
	</head>
	<body>
	<center>
	<h1>My Profile</h1><hr />
	<div id="content">
	<?php
	$directory='img';
	$handle=opendir($directory.'/');
	while ($file=readdir($handle)) {
		if($file==$_SESSION['user_id'].'.jpg'){
			$GLOBALS['global']=1;
		break;
	}
	}
if($GLOBALS['global']==1){
	?>
		<img src="<?php echo $directory ?>/<?php echo $file ?>" height="260px"><br />
		<?php
}
else if(isset($_SESSION['img'])&&!empty($_SESSION['img'])){
?>
	<img src="img/<?php echo $_SESSION['img'] ?>" height="260px"><br />
	<?php
}else{
	?>

<img src="profile.jpg" height="260px"><br />
<?php
}
?>
	<div id="name">Name: <?php echo $firstname.' '.$surname; ?></div><br />
	<div id="name">Email: <?php echo $email; ?></div><br />
	<div id="name">Mobile Number: <?php echo $mobile; ?></div><br />
	<div id="name">Username: <?php echo $username; ?></div><br />
	<div id="update">Update profile picture:</div>
	<form action="profile.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><br /><br />
<input type="submit" value="Submit">
</form>
	</div>
	</center>
	<div id="menu">
<a href="log.php" id="home">>>Home</a><br />
<a href="profile.php" id="profile">>>My Profile</a><br />
<a href="#" id="new" onclick="delacc();">>>Delete Account</a><br />
<a href="logout.php" id="how" >>>Log out</a>
</div><script type="text/javascript">
	function delacc(){
var con=confirm('Are you sure you want to delete your Account');
var acc=document.getElementById("new");
if(con==true){
	acc.setAttribute("href","delete.php");
}
}
</script>
	</body>
	</html>
	<?php
	}else
	require 'user.php';
	?>