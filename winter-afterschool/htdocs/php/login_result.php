<?php
//사용자가 입력한 값을 가져오기
$user_id=$_POST[name1];
$user_pass=$_POST[pass];

echo $user_id;
echo $user_pass;

$admin="minsun";
$admin_pass="123";


if($user_id==$admin && $user_pass==$admin_pass){
	echo "로그인 되었습니다!";
}
else if($user_id!=$admin || $user_pass!=$admin_pass){
	echo "아이디/비밀번호가 틀렸습니다!";
	echo "<script>alert('아이디/비밀번호틀렸습니다');history.go(-1);</script>";
}
else if($user_id!=$admin&&$user_pass!=$admin_pass){
	echo "회원이 아닙니다!";
}





?>