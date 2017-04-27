 <style>
#table{
	width:700px;
	height:550px;
	}
table{
	border-left:white;
	border-right:white;
	}
#c{	
	background-color:#c4ff88;
	text-align:center;
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
 <?php
	$num=$_GET[a];
	$conn=mysql_connect('localhost','test','test_pass');
	mysql_select_db('test_db',$conn);
	mysql_set_charset("utf8",$conn);
	  $up_sql = "UPDATE guest SET
                       hit = hit+1 
                        WHERE id = $num";
    mysql_query($up_sql);
	
	$query="select id,user_name,email,title,content,regi_date,hit,ip_addr from guest where id=$num";
	
	$result=mysql_query($query,$conn);
	//$result=mysql_query($query1,$conn);
	
	mysql_query("SET NAMES utf8",$conn);
	$re=mysql_fetch_row($result);

	
	

	
 ?>
 <center>

	<table cellpadding=3 cellspacing=0 width=700px height=50px>
		<tr>
			<td width=250px>글번호</td>
			<td width=100px><?=$re[0]?></td>
			<td>조회수</td>
			<td><?=$re[6]?></td>
		</tr>
		</table>
			<table border cellpadding=3 cellspacing=0 id="table">
		<tr>
			<td id="c" height=40px>작성자</td>
			<td><?=$re[1]?></td>
		</tr>
		<tr>
			<td id="c" height=40px>이메일</td>
			<td ><?=$re[2]?></td>
		</tr>
		<tr>
			<td id="c" height=40px>제목</td>
			<td><?=$re[3]?></td>
		</tr>
		<tr>
			<td id="c">내용</td>
			<td><?=$re[4]?></td>
		</tr>
		<tr>
			<td id="c" height=40px>날짜</td>
			<td><?=$re[5]?></td>
		</tr>
			<td id="c" height=40px>ip주소</td>
			<td><?=$re[7]?></td>
		</tr>
		</table>
		<a href='delete_form.php?a=<?php echo $re[0]?>' >삭제</a>&nbsp;&nbsp;<a href='update_form.php?a=<?php echo $re[0]?>'>수정</a>
		<a href='list.php'>뒤로가기</a>
  </center>
  </form>