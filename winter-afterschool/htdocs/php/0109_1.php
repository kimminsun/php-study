<?php
	echo $_SERVER["REMOTE_ADDR"]."<br>";
	echo $_SERVER["DOCUMENT_ROOT"]."<br>"; //���� ������ ��ġ
	echo $_SERVER["HTTP_USER_AGENT"]."<br>"; //���� �������� ���ȯ��
	echo $_SERVER["SCRIPT_FILENAME"]."<br>";//����Ǵ� ������ ��ġ�� ���ϸ�
	echo $_SERVER["SERVER_NAME"]."<br>"; //������
	echo $_SERVER["SERVER_PORT"]."<br>"; //��Ʈ��ȣ
	echo $_SERVER["SERVER_SOFTWARE"]."<br>";  //����ϴ� ������� ����Ʈ����
	//$_SERVER["PHP_SELF"]
?>