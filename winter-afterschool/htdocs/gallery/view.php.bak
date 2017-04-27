<?php

	include '../dbconn.php';

	$query="select id,title,width,height from gallery order by id desc";

	$result=mysql_query($query,$conn);
	$num=mysql_num_rows($result);

	for($i=0;$i<$num;$i++){
		$re=mysql_fetch_row($result);
		echo "<table border><tr><td>iamge</td><td>제목</td></tr>";
		echo "<tr><td>
		<a href=view.php?id=$re[0]><img src=view.php?id=$re[0] width=$re[2] height=$re[3]><td>$re[1]  $re[2]  $re[3]</td></tr>";
	}
	echo "</table>";
	?>