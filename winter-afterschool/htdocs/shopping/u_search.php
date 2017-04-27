<?php

	include '../dbconn.php';
	
	$u_name=$_POST[u_name];
	$u_id=$_POST[u_id];
	$u_hp=$_POST[u_hp];

	$query="select user_name,user_id,passwd,hp from join_mem where user_name='$u_name'";

	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);


	if($u_id==$re[1] && $u_hp==$re[3]){
		?>
	<center>
	<fieldset>
		비밀번호는 <?php echo $re[2];
	}
	?>
	<center>
