<?php
	echo $_SERVER["REMOTE_ADDR"]."<br>";
	echo $_SERVER["DOCUMENT_ROOT"]."<br>"; //현재 서버상 위치
	echo $_SERVER["HTTP_USER_AGENT"]."<br>"; //현재 접속자의 사용환경
	echo $_SERVER["SCRIPT_FILENAME"]."<br>";//실행되는 파일의 위치와 파일명
	echo $_SERVER["SERVER_NAME"]."<br>"; //도메인
	echo $_SERVER["SERVER_PORT"]."<br>"; //포트번호
	echo $_SERVER["SERVER_SOFTWARE"]."<br>";  //사용하는 사용자의 소프트웨어
	//$_SERVER["PHP_SELF"]
?>