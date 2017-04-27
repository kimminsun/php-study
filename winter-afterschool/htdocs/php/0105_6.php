<?php

	$dae=20000;
	$so=15000;
	$baby=0;

	$ydae=15000;
	$yso=10000;
	$ybaby=0;

	$age=30;

	if($age>18){
		echo "주간 성인 요금 : ".$dae;
	}
	else if($age>7){
		echo "주간 소인 요금 : ".$so;
	}
	else{
		echo "주간 유아 요금 : ".$baby;
	}

		

 ?>