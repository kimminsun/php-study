<?php
//����ڰ� �Է��� ���� ��������
$kor=$_POST[kor];
$eng=$_POST[eng];
$math=$_POST[math];

$sum=$kor+$eng+$math;
$eve=$sum/3;

echo "������ : ".$sum."<br>";
echo "��� : ".$eve."<br>";





?>