<?php
	$num=$_GET[aa];
	echo $num;
	$u_pass =$_POST[pass];
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	$query="select passwd from join_mem where id=$num";
	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);
	if($re[0]==$u_pass){
		echo "<script>alert('삭제되었습니다') 
		;</script>";
		$query1="delete from join_mem where id=$num";
		$result1=mysql_query($query1,$conn); 
		
	}
	else if($re[0]!=$u_pass){	
		echo "<script>alert('비밀번호를 다시 확인해주세요') 
		history.go(-1);</script>";
	}
		



//if($u_pass=


	//테이블에서 비밀번호 가져오기	
	//한줄 가지고 오기
	//$u_pass 와 비번 비교하기
	//같으면 delete하고
	//다르면 '비밀번호 틀립니다' 스크립트 내보내기 history.go(-1);
		
	?>
<meta http-equiv='refresh' content='0;url=list.php'>;





