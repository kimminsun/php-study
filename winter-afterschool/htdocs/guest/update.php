<?php
	$num=$_GET[aa];
	$u_password=$_POST[password];
	$u_name=$_POST[user_name];
	$u_title=$_POST[title];
	$u_content=$_POST[content];
	$u_email=$_POST[email];
	
	
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	$query="select user_name,password,title,content,email from join_mem where id=$num";
	$result=mysql_query($query,$conn);
	mysql_query("SET NAMES utf8",$conn);
	$re=mysql_fetch_row($result);
	


	if($u_password==$re[1]){
		$query1="update guest set user_name='$u_name',title='$u_title',content='$u_content',email='$u_email' where id=$num";
		$result1=mysql_query($query1,$conn);
			echo "<script>alert('수정되었습니다!');</script>";
	}
	else if($u_password!=$re[1]){
		echo "<script>alert('비밀번호를 다시 확인해주세요') 
		history.go(-1);</script>";
	}
		





?>
<meta http-equiv='refresh' content='0;url=list.php'>;