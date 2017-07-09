<?php
require 'require.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Notes Panel</title>
		<link rel="shortcut icon" href="logo.ico" type="x-icon">
		<style type="text/css">
body{margin:0px;padding:0px;background-image:url('note10.jpg');background-position:center center;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;}
h1{font-size:35px;font-family:cursive;}
#content{font-family:cursive;}
#home{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:71px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:red;text-decoration:none;width:268px;}
#home:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#notes{font-size:29px;font-family:cursive;font-style:italic;background-color:skyblue;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:120px;display:inline-block;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:black;text-decoration:none;width:268px;}
#notes:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}


#profile{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:169px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:20px;color:red;text-decoration:none;width:270px;}
#profile:hover{font-size:34px;z-index:9999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#new{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 36px 36px 2px;position:absolute;top:218px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:15px;color:red;text-decoration:none;width:275px;}
#new:hover{font-size:34px;z-index:999;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}

#how{font-size:29px;font-family:cursive;font-style:italic;background-color:black;margin-left:-5px;border:2px solid black;border-radius:2px 40px 40px 2px;position:absolute;top:267px;display:inline;transition:all 0.5s;padding-left:8px;padding-right:8px;padding-right:40px;color:red;z-index:999999;text-decoration:none;width:250px;}
#how:hover{font-size:34px;z-index:99;box-shadow:7px 7px 15px black;cursor:crosshair;border-radius:2px;background-color:red;color:black;}
	</style>
	</head>      
	<body>
<center><h1>Notes Panel</h1><hr /></center>
<div id="content">
<a href="log.php" id="home">>>Home</a><br />
<a href="notes.php" id="notes">>>Notes Panel</a><br />
<a href="profile.php" id="profile">>>My Profile</a><br />
<a href="#" id="new" onclick="delacc();">>>Delete Account</a><br />
<a href="logout.php" id="how">>>Log out</a>
</div>
<script type="text/javascript">
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
$note1=field('note1');
if($note1!=''){
?>
<center>
<div style="height:100px;width:300px;background-color:yellow;text-align:center;">
	<span style="font-family:cursive;"><?php echo $note1; ?></span><br>
	<form action="noteN1.php" method="POST">
		<input type="submit" name="delnote" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}
$note2=field('note2');
if($note2!=''){
?>
<center>
<div style="height:100px;width:300px;background-color:yellow;text-align:center;">
	<span style="font-family:cursive;"><?php echo $note2; ?></span><br>
	<form action="noteN2.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note3=field('note3');
if($note3!=''){
?>
<center>
<div id="note3" style="height:100px;width:300px;background-color:yellow;text-align:center;">
	<span style="font-family:cursive;"><?php echo $note3; ?></span><br>
	<form action="noteN3.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note4=field('note4');
if($note4!=''){
?>
<center>
<div id="note4" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note4; ?></span><br>
	<form action="noteN4.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note5=field('note5');
if($note5!=''){
?>
<center>
<div id="note5" style="height:100px;width:300px;background-color:yellow;text-align:center;">
	<span style="font-family:cursive;"><?php echo $note5; ?></span><br>
	<form action="noteN5.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note6=field('note6');
if($note6!=''){
?>
<center>
<div id="note6" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note6; ?></span><br>
	<form action="noteN6.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note7=field('note7');
if($note7!=''){
?>
<center>
<div id="note7" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note7; ?></span><br>
	<form action="noteN7.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}
$note8=field('note8');
if($note8!=''){
?>
<center>
<div id="note8" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note8; ?></span><br>
	<form action="noteN8.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note9=field('note9');
if($note9!=''){
?>
<center>
<div id="note9" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note9; ?></span><br>
	<form action="noteN9.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}

$note10=field('note10');
if($note10!=''){
?>
<center>
<div id="note10" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note10; ?></span><br>
	<form action="noteN10.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
}


if(isset($_POST['note'])&&!empty($_POST['note'])){
	$note=$_POST['note'];
	$note1=field('note1');
	if($note1==''){
	$query="UPDATE `users` SET `note1`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN1.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note2=field('note2');
	if($note2==''){
	$query="UPDATE `users` SET `note2`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN2.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note3=field('note3');
	if($note3==''){
	$query="UPDATE `users` SET `note3`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN3.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note4=field('note4');
	if($note4==''){
	$query="UPDATE `users` SET `note4`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN4.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note5=field('note5');
	if($note5==''){
	$query="UPDATE `users` SET `note5`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN5.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note6=field('note6');
	if($note6==''){
	$query="UPDATE `users` SET `note6`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN6.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note7=field('note7');
	if($note7==''){
	$query="UPDATE `users` SET `note7`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN7.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note8=field('note8');
	if($note8==''){
	$query="UPDATE `users` SET `note8`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN8.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note9=field('note9');
	if($note9==''){
	$query="UPDATE `users` SET `note9`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN9.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		$note10=field('note10');
	if($note10==''){
	$query="UPDATE `users` SET `note10`='$note' WHERE `id`='".$_SESSION['user_id']."'";
	$query_run=mysql_query($query);
	?>
<center>
<div id="note" style="height:100px;width:300px;background-color:yellow;text-align:center;">

	<span style="font-family:cursive;"><?php echo $note; ?></span><br>
	<form action="noteN10.php" method="POST">
		<input type="submit" name="delnote" value="Delete">
	</form>
</div><hr>
</center>
<?php
	}else{
		?>
<center>
	<span style="font-family:cursive;">No Space Left</span>
	<hr>
</center>
<?php
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	?>
<center>
<form action="notes.php" method="POST">
<textarea rows="6" cols="40" name="note" maxlength="110"  placeholder="Create a New Note.Maximum length 110 words.">
</textarea><br>
<input type="submit" value="Submit">
</form>
</center>
<?php
}else
	require 'user.php';
	?>
	