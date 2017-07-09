<?php
if(mysql_connect('localhost','id1609175_shashi1iitkgp','Suraj@9631')){
if(mysql_select_db('id1609175_database1212'))
	;
else
echo 'Cannot connect to database.Try again Later.';
}else
echo 'Cannot connect to database.Try again Later.';
?>