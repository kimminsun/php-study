<?php
	include '../dbconn.php';
	$id=$_GET[id];
	$query="select * from gallery where id=$id";
	$result=mysql_query($query,$conn);
	$row=mysql_fetch_row($result);
	Header("Content-type: image/jpeg");

	echo $row[1];
	mysql_close();



?>