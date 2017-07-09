<?php
require 'require.php';


if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	$firstname=field('firstname');
	$surname=field('surname');
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="shortcut icon" href="logo.ico" type="x-icon">
	<style type="text/css">
.container{max-width:960px;width:96%;margin:auto;}
		
	body{margin:0px;padding:0px;background-image:url('wallpaper.jpg');background-position:center center;background-repeat:no-repeat;background-size:cover;}
		#content{background:-webkit-linear-gradient(left,yellow,red);font-family:cursive;border-radius:2px 25px 25px 2px;box-shadow:10px 10px 20px lightpink inset}
		#play{color:blue;cursor:pointer;}
#home{font-size:29px;font-family:cursive;font-style:italic;background-color:skyblue;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:71px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:black;text-decoration:none;width:268px;}
#home:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}
#profile{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:120px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:red;text-decoration:none;width:270px;}
#profile:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#new{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 36px 36px 2px;position:absolute;top:169px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:15px;color:red;text-decoration:none;width:275px;}
#new:hover{font-size:34px;z-index:999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#how{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:218px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:40px;color:red;z-index:999999;text-decoration:none;width:250px;}
#how:hover{font-size:34px;z-index:99;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#gift{font-size:22px;background-color:pink;padding:4px;}
	</style>
</head>
<body>

<center>
<div id="content"><h1>
<?php
$GLOBALS['global']=0;
echo 'Hello,'.$firstname.' '.$surname.'<br />';
?></h1></div >
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
<div class="container">
<span id="gift">Here is something for you <span id="play" onclick="play();">Only!</span></span><br /><br />
<img src="gift.jpg" id="img"><br />
</form>


<img src="1.jpg" id="i1" width="0px" height="0px">
<img src="2.jpg" id="i2" width="0px" height="0px">
<img src="3.jpg" id="i3" width="0px" height="0px">
<img src="4.jpg" id="i4" width="0px" height="0px">
<img src="5.jpg" id="i5" width="0px" height="0px">
<img src="6.jpg" id="i6" width="0px" height="0px">
<img src="7.jpg" id="i7" width="0px" height="0px">
<img src="8.jpg" id="i8" width="0px" height="0px">
<img src="9.jpg" id="i9" width="0px" height="0px">
<img src="10.jpg" id="i10" width="0px" height="0px">
<img src="11.jpg" id="i11" width="0px" height="0px">
<img src="12.jpg" id="i12" width="0px" height="0px">
<img src="13.jpg" id="i13" width="0px" height="0px">
<img src="14.jpg" id="i14" width="0px" height="0px">
<img src="15.jpg" id="i15" width="0px" height="0px">
<img src="16.jpg" id="i16" width="0px" height="0px">
<img src="17.jpg" id="i17" width="0px" height="0px">
<img src="18.jpg" id="i18" width="0px" height="0px">
<img src="19.jpg" id="i19" width="0px" height="0px">
<img src="20.jpg" id="i20" width="0px" height="0px">
<img src="21.jpg" id="i21" width="0px" height="0px">
<img src="22.jpg" id="i22" width="0px" height="0px">
<img src="23.jpg" id="i23" width="0px" height="0px">
<img src="24.jpg" id="i24" width="0px" height="0px">
<img src="25.jpg" id="i25" width="0px" height="0px">
</center>
</div>
<div id="menu">
<a href="log.php" id="home">>>Home</a><br />
<a href="profile.php" id="profile">>>My Profile</a><br />
<a href="#" id="new" onclick="delacc();">>>Delete Account</a><br />
<a href="logout.php" id="how" >>>Log out</a>
</div>

<script type="text/javascript">
var time=0;
var num;
function play(){
	if(time==0){
var num=Math.floor(Math.random()*26);
	document.getElementById("img").src=document.getElementById("i"+num).src;
	time++;
}
}


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
}
else{
	require 'user.php';
}
?>