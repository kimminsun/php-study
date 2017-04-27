<?php
	include '../dbconn.php';

	$filename=$_FILES[image][tmp_name];
	$size=GetImageSize($filename);
	//GetImageSize의 리턴값 : 배열
	//$size[0];width;
	//$size[1];height;


	$width=$size[0];
	$height=$size[1];


	$fp=fopen($filename,"rb");
	$imageblob=addslashes(fread($fp,filesize($filename)));
	$size1=filesize($filename);


	$query="insert into gallery values('','$imageblob','$title',$width,$height,$size1)";
	mysql_query($query,$conn);
	mysql_close();


?>