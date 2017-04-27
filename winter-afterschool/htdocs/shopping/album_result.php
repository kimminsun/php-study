<?php

include '../dbconn.php';
//아이디와 비밀번호가 사용할 디비
$u_name=$_POST[name];
$u_per=$_POST[per];
$u_hp=$_POST[hp];



if($u_passwd!=$u_passwdch){
	echo "<script>alert('비밀번호가 맞지 않습니다 다시 입력해주세요')
	      window.history.back()</script>";
}
if($u_passwd==$u_passwdch){
echo $u_id."<br>";
echo $u_name."<br>";
echo $u_passwd."<br>";
echo $u_passwdch."<br>";
echo $u_gender."<br>";
echo $u_hobby."<br>";
echo $u_job."<br>";
echo $u_hp."<br>";
echo $u_email."<br>";

$query="insert into join_mem values(' ','$u_id','$u_name','$u_passwd','$u_passwdch','$u_gender','$u_hobby','$u_job','$u_hp','$u_email')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다');</script>";
mysql_close();
echo ("<meta http-dquiv='refresh' content='0;url=join_form.html'>");
}

?>
