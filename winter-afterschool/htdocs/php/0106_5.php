<style>
table{
	width:200px;
	height:100px;
	background-color:white;
	}
td{
	width:50px;

	}

h3{
	font-weight:bold;

	}
body{
	background-color:#c9c9c9;
	background-image:url("../img/paloalto.jpg");
	}
	#a{
			background-color:#ffcccc;
			}

</style>

<?php
	$palo=$_POST[palo];
	$jb=$_POST[jb];
	$justhis=$_POST[justhis];
	$heo=$_POST[heo];
	$sunsu=$_POST[sunsu];
	$takeone=$_POST[takeone];
	$bunsin=$_POST[bunsin];


	$sum1=0;
	$sum2=0;
	
	if($palo=="2")
		$sum1+=20;
	else 
		$sum1+=0;
	if($jb=="3")
		$sum1+=20;
	else
		$sum1+=0;
	if($justhis=="1")
		$sum1+=20;
	else
		$sum+=0;

	
	if(strcmp($heo , "�����")==1)
		$sum2+=10;
	else 
		$sum2+=0;
	if(strcmp($sunsu , "�Ѽ���")==1)
		$sum2+=10;
	else 
		$sum2+=0;
	if(strcmp($takeone , "����̳�")==1)
		$sum2+=10;
	else
		$sum2+=0;
	if(strcmp($bunsin , "�н�")==1)
		$sum2+=10;
	else
		$sum2+=0;


	echo
		"<center >
		<h3>�� ��</h3>
		<table border cellpadding=3 cellspacing=0>
			<tr>
				<td id=a>������</td>
				<td>".$sum1."</td>
			</tr>
			<tr>
				<td id=a>�ְ���</td>
				<td>".$sum2."</td>
			</tr>
			<tr>
				<td id=a>����</td>
				<td>".($sum1+$sum2)."</td>
		</table>
		</center>
		"
		
?>