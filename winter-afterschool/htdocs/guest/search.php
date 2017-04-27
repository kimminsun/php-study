<style>
body{ 

	}
td { 
	text-align:center;
	}
table {
		border:solid;
		width:750px;
		height:100px;
		border-right:white;
		border-left:white;
		}
#a{
	background-color:#ffff99;
	}
a:link {font-size:9pt;color:gray;
			text-decoration:none;}
	a:visited {font-size:9pt;
				color:gray;
				text-decoration:none;}
	a:hover{ font-size:9pt;
				color:red;
				text-decoration:underline;}
	a:active{ font-size:9pt;
				color:red;
				text-decoration:underline;}
</style>
<center>
<h2>검 색 결 과</h2>
<?php
	$select=$_POST[select];
	$input=$_POST[search];

	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	mysql_set_charset("utf8",$conn);

	if($select=="title"){
		$query="select id,title,user_name,regi_date,hit,ip_addr from guest where title like '%$input%'";
		$result=mysql_query($query,$conn);

		$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re=mysql_fetch_row($result);
	?>
<table>
	<tr>
		<td><?php echo $re[0]?></td>
		<td><a href='read.php?a=<?php echo $re[0]?>'><?php echo $re[1]?></a></td>
		<td><?php echo $re[2]?></td>
		<td><?php echo $re[3]?></td>
		<td><?php echo $re[4]?></td>
		<td><?php echo $re[5]?></td>
	</tr>
	</table>
<center>
	<?php
		}
	}

	if($select=="writer"){
		$query="select id,title,user_name,regi_date,hit,ip_addr from guest where user_name like '%$input%'";
		$result=mysql_query($query,$conn);

		$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re=mysql_fetch_row($result);
	?>
<table>
	<tr>
		<td><?php echo $re[0]?></td>
		<td><a href='read.php?a=<?php echo $re[0]?>'><?php echo $re[1]?></a></td>
		<td><?php echo $re[2]?></td>
		<td><?php echo $re[3]?></td>
		<td><?php echo $re[4]?></td>
		<td><?php echo $re[5]?></td>
	</tr>
	</table>
</center>
	<?php
		}
	}
		if($select=="content"){
		$query="select id,title,user_name,regi_date,hit,ip_addr from guest where content like '%$input%'";
		$result=mysql_query($query,$conn);

		$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re=mysql_fetch_row($result);
	?>
<center>
<table>
	<tr>
		<td><?php echo $re[0]?></td>
		<td><a href='read.php?a=<?php echo $re[0]?>'><?php echo $re[1]?></a></td>
		<td><?php echo $re[2]?></td>
		<td><?php echo $re[3]?></td>
		<td><?php echo $re[4]?></td>
		<td><?php echo $re[5]?></td>
	</tr>
	</table>
</center>
	<?php
		}
	}
else
{
	echo "검색결과가 없습니다";
}
?>