<?php
	include '../dbconn.php';
	$num=$_GET[a];
	$query="select * from album where id=$num order by id desc";


	$result=mysql_query($query,$conn);
	$re=mysql_fetch_row($result);
	//$num=mysql_num_rows($result);

?>
<style>
table{
	width:500px;
	height:40px;
	}
#a{
	width:500px;
	height:300px;
	}

  div{
	text-align:right;
	}
  body{
	background-color:#ababab;
	}


  		a:link {font-size:11pt;color:white;
				text-decoration:none;}
	a:visited {font-size:11pt;
				color:white;
				text-decoration:none;}
	a:hover{ font-size:11pt;
				color:red;
				text-decoration:underline;}
	a:active{ font-size:11pt;
				color:red;
				text-decoration:underline;}
	fieldset{
		width:1000px;
		background-color:white;
		}
	input[type=submit]{
		width:5em;
		height:3em;
		background-color:black;
		color:white;

		}
		legend{
			font-size:15pt;
			}

</style>
<form method="post" action="result.php">
<center>
<fieldset>
<legend>주문상품정보</legend>

<table border cellspacing=0 cellpadding=3>
	<tr>
		<td>Thanks to</td>
		<td>상품명</td>
		<td>수량</td>
		<td>가격</td>
		
	</tr>
	<tr>
		<td></td>
		<td><?php echo $re[1] ?></td>
		
		<td><select name="su">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			</td>
		<td><?php echo $re[3] ?></td>
	</tr>

</table>

<br><br>
배송 방법 선택<br>

<table border cellspacing=0 cellpadding=3>
<tr>
	<td>배송방법</td>
	<td><input type="radio" name="del">택배</input></td>
	<td><input type="radio" name="del">우체국택배</input>
	<td><input type="radio" name="del">편의점</input>
</tr>
</table>

<br><br>
배송지 정보 입력<font color="red">(*필수 입력 항목)</font>

<table border cellspacing=0 cellpadding=3 id="a">
<tr>
	<td>주문인<font color="red">*</font></td>
	<td><input type="text" required></input></td>
</tr>
<tr>
	<td>받으시는 분<font color="red">*</font></td>
	<td><input type="text" required></td>
</tr>
<tr>
	<td>부재시 대리 수령자</td>
	<td><input type="text"></td>
</tr>
<tr>
	<td>주소<font color="red">*</font></td>
	<td><input type="text"  pattern="[0-9]{4}"></input><br>
		<input type="text"></input><br>
		<input type="text"></input><br>
	</td>
</tr>
<tr>
	<td>휴대전화번호<font color="red">*</font></td>
	<td><input type="text" size=3></input>-<input type="text" size=3></input>-<input type="text" size=3></input></td>
</tr>
<tr>
	<td>부재시 위탁장소</td>
	<td><input type="text"></input>
</tr>
</table>
<br><br>
</fieldset>

<input type="submit" value="다음단계"></input>
</center>



