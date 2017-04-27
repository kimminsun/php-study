<?php

	$conn=mysql_connect('localhost','test','test_pass');

	mysql_select_db('test_db',$conn);
	mysql_set_charset("utf8",$conn);

	$u_writer=$_POST[writer];
	$u_email=$_POST[email];
	$u_title=$_POST[title];
	$u_content=$_POST[content];
	$u_password=$_POST[password];

	$rday=date("Y-m-d (H:i)");
	$ip=$_SERVER[REMOTE_ADDR];

	/*echo $u_writer."<br>"
	.$u_email."<br>"
	.$u_title."<br>"
	.$u_content."<br>"
	.$u_password."<br>"
	.$rday."<br>"
	.$ip."<br>";*/

	$query="insert into guest values(' ','$u_writer','$u_password','$u_email','$u_title','$u_content','$rday',0,'$ip')";
	mysql_query($query,$conn);
	echo "<script>alert('등록되었습니다');</script>";
	mysql_close();

	





?>
<meta http-equiv='refresh' content='0;url=list.php'>