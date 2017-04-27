<?php
	$num=$_GET[aa];
	$u_pass=$_POST[pass];
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	$query="select password from guest where id=$num";

	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);

	if($u_pass==$re[0]){
		echo "<script>alert('삭제되었습니다')</script>";
		$query1="delete from guest where id=$num";
		$result1=mysql_query($query1,$conn); 
	}
	else if($u_pass!=$re[0]){
		echo "<script>alert('비밀번호를 다시 확인해주세요') history.go(-1);</script>";

	}
		
	


?>
<meta http-equiv='refresh' content='0;url=list.php'>