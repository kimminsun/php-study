<?php
//����ڰ� �Է��� ���� ��������
$user_id=$_POST[name1];
$user_pass=$_POST[pass];

echo $user_id;
echo $user_pass;

$admin="minsun";
$admin_pass="123";


if($user_id==$admin && $user_pass==$admin_pass){
	echo "�α��� �Ǿ����ϴ�!";
}
else if($user_id!=$admin || $user_pass!=$admin_pass){
	echo "���̵�/��й�ȣ�� Ʋ�Ƚ��ϴ�!";
	echo "<script>alert('���̵�/��й�ȣƲ�Ƚ��ϴ�');history.go(-1);</script>";
}
else if($user_id!=$admin&&$user_pass!=$admin_pass){
	echo "ȸ���� �ƴմϴ�!";
}





?>