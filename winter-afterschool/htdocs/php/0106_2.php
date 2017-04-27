<?php
//사용자가 입력한 값을 가져오기
$number=$_POST[number];

for($i=1;$i<=$number;$i++){
	$sum+=$i;
}
echo "1~".$number."까지의 합은 ".$sum."입니다";





?>