<style>
body{ 

	}
td { 
	text-align:center;
	}
table {
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
<h2>게 시 글 </h2>

<table border cellspacing=0 cellpadding=3>
<form method=post action='search.php'>

<tr>
	<td id="a">번호</td>
	<td id="a" width="350px">제목</td>
	<td id="a" width="100px">글쓴이</td>
	<td id="a">날짜</td>
	<td id="a">조회</td>
	<td id="a">아이피주소</td>
</tr>
<?php
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	mysql_set_charset("utf8",$conn);

	$query="select id,title,user_name,regi_date,hit,ip_addr from guest order by id desc";
	$result=mysql_query($query,$conn);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++){
		$re=mysql_fetch_row($result);
	?>

	<tr>
		<td><?php echo $re[0]?></td>
		<td><a href='read.php?a=<?php echo $re[0]?>'><?php echo $re[1]?></a></td>
		<td><?php echo $re[2]?></td>
		<td><?php echo $re[3]?></td>
		<td><?php echo $re[4]?></td>
		<td><?php echo $re[5]?></td>
	</tr>
	<?php
	}
	?>
	</table>
	<a href='guest_form.html' >[글쓰기]</a>
	<br>
	<br>
	<select name="select">
		<option value="title">제목</option>
		<option value="writer">작성자</option>
		<option value="content">내용</option>
	</select>
	<input type="text" name="search"></input>
	<input type="submit" value="검색"></input>
	</center>
	<?php
	mysql_close(); 
	?>
	</form>