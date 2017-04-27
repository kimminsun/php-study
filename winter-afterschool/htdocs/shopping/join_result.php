<?php

include '../dbconn.php';
//아이디와 비밀번호가 사용할 디비
$u_id=$_POST[user_id];
$u_name=$_POST[user_name];
$u_passwd=$_POST[passwd];
$u_passwdch=$_POST[passwd_check];
$u_gender=$_POST[gender];
$u_hobby=$_POST[hobby];
$u_job=$_POST[job];
$u_hp=$_POST[hp];
$u_email=$_POST[email];


if($u_passwd!=$u_passwdch){
	echo "<script>alert('비밀번호가 맞지 않습니다 다시 입력해주세요')
	      window.history.back()</script>";
}
if($u_passwd==$u_passwdch){

$query="insert into join_mem values(' ','$u_id','$u_name','$u_passwd','$u_passwdch','$u_gender','$u_hobby','$u_job','$u_hp','$u_email')";
mysql_query($query,$conn);
echo "<script>alert('등록되었습니다');</script> <meta http-equiv='refresh' content='0;url=shop_1.php'>";
mysql_close();

}

?>
