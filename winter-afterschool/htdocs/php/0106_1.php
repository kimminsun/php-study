<?php
//사용자가 입력한 값을 가져오기
$kor=$_POST[kor];
$eng=$_POST[eng];
$math=$_POST[math];

$sum=$kor+$eng+$math;
$eve=$sum/3;

echo "총점은 : ".$sum."<br>";
echo "평균 : ".$eve."<br>";





?>