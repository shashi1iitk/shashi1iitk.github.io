<?php
require 'databaseC.php';
ob_start();
session_start();
$current_file=$_SERVER['SCRIPT_NAME'];

function field($field){
	$query="SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
	if($query_run=mysql_query($query)){
		if($query_result=mysql_result($query_run,0,$field)){
			return $query_result;
		}
	}
}
?>