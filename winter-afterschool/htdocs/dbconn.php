<?php
$conn=mysql_connect('localhost','test','test_pass');
mysql_select_db('test_db',$conn);
mysql_set_charset("utf8",$conn);
?>