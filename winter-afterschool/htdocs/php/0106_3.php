<style>
	body{
		background-color:#c0c0c0;
		}
	table{
		 width:400px; 
		 height:300px;
		 background-color:#ffffff;
		 }

	td{
		width:40px;
		 background-color:#ffffff;
		}
	#a{ 
		background-color:#ffccff;
		text-align:center;

		}
	fieldset{
		width:500px;
		height:350px;
		background-color:#ffffff;
		border:10px;
		}
	legend{
		font-weight:bold;
		font-size:15pt;
		}

}
</style>
<?php
//����ڰ� �Է��� ���� ��������
$id=$_POST[id];
$passwd=$_POST[passwd];
$repasswd=$_POST[repasswd];
$radio=$_POST[radio];
$chk=$_POST[chk];
$birth=$_POST[birth];
$age=$_POST[age];
$email=$_POST[email];
$select=$_POST[select];
$memo=$_POST[memo];
echo 
	"<center>
	<fieldset>
	<legend>회원정보</legend>
	<table border cellpadding=3 cellspacing=0> 
		<tr>
			<td id=a>이름</td>
			<td>".$id."</td>
	    </tr>
		<tr>
			<td id=a>비밀번호</td>
			<td>".$passwd."</td>
		</tr>
		<tr>
			<td id=a>비밀번호확인</td>
			<td>".$repasswd."</td>
		</tr>
		<tr>
			<td id=a>성별</td>
			<td>";
		 if($radio=="man")
			echo "남자";
		else if($radio=="woman")
			echo "여자";
			
		echo "</td>
		<tr>
			<td id=a>취미</td>
			<td>";
		if($chk==1)
			echo "운동";
		else if($chk==2)
			echo "여행";
		else if($chk==3)
			echo "독서";
		echo"</td>
		</tr>
		<tr>
			<td id=a>나이</td>
			<td>".$age."</td>
		<tr>
			<td id=a>이메일</td>
			<td>".$email."@".$select."</td>
		</tr>
		<tr>
			<td id=a>메모</td>
			<td>".$memo."</td>
		</tr>
		</table>
		</fieldset>
			</center>"
?>
